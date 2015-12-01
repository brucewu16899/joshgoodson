FROM ubuntu:14.04

MAINTAINER Josh Goodson <josh@joshgoodson.com>

ENV HOME /root
ENV DEBIAN_FRONTEND noninteractive

# Use Supervisor to run and manage all other services
CMD ["/usr/local/bin/supervisord", "-c", "/etc/supervisord.conf"]

#############
# Provision #
#############

RUN apt-get update

# curl
RUN apt-get -y install curl libcurl3 libcurl3-dev php5-curl python

# supervisor
RUN mkdir -p /etc/supervisord/ && mkdir /var/log/supervisord
ADD docker/conf/supervisor.conf /etc/supervisord.conf
ADD docker/service/* /etc/supervisord/
RUN curl https://bootstrap.pypa.io/ez_setup.py -o - | python
RUN easy_install supervisor

# ssh
RUN apt-get install -y openssh-server && mkdir /var/run/sshd && \
 sed -i "s/#PasswordAuthentication yes/PasswordAuthentication no/" /etc/ssh/sshd_config
ADD docker/keys/insecure_key.pub /root/.ssh/authorized_keys
RUN mkdir -p /root/.ssh && \
 chmod 700 /root/.ssh && \
 chown root:root /root/.ssh && \
 chmod 600 /root/.ssh/authorized_keys

# cron, vim, git
RUN apt-get -y install cron vim git

# nginx
RUN apt-get -y install nginx
ADD docker/conf/nginx-development /etc/nginx/sites-available/default
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

# php5
RUN apt-get -y install php5-fpm php5-cli php5-mcrypt php5-mysqlnd
ADD docker/conf/php.fpm.ini /etc/php5/fpm/php.ini
ADD docker/conf/php.cli.ini /etc/php5/cli/php.ini
RUN php5enmod mcrypt
# Disable 'daemonize' in php5-fpm (because we use supervisor instead)
RUN sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php5/fpm/php-fpm.conf

# mysql
RUN apt-get -y install mysql-client mysql-server pwgen
ADD docker/conf/my.cnf /etc/mysql/my.cnf

# Node and NPM
RUN curl -sL https://deb.nodesource.com/setup_0.12 | sudo bash -
RUN apt-get install -y nodejs

# Composer PHP dependency manager
RUN php -r "readfile('https://getcomposer.org/installer');" | php
RUN mv composer.phar /usr/local/bin/composer

# Expose ports
EXPOSE 80

# Set locale (support UTF-8 in the container terminal)
RUN locale-gen en_US.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US:en
ENV LC_ALL en_US.UTF-8

# Clean up
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
