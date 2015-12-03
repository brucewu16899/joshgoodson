<?php

namespace JoshGoodson\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\ConnectionResolverInterface as Resolver;

class DownCommand extends Command
{
  /**
   * The console command name.
   *
   * @var string
   */
  protected $name = 'down';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'OVERRIDDEN Put the application into maintenance mode';

  /**
   * Database connection
   *
   * @var Illuminate\Database\MySqlConnection
   */
  protected $connection;

  public function __construct()
  {
      parent::__construct();

      //$this->connection = $this->laravel->db->connection('mysql');
  }

  /**
   * Execute the console command.
   *
   * @return void
   */
  public function fire()
  {
      //var_dump($this->connection);
      //touch($this->laravel->storagePath().'/framework/down');

      //$this->comment('Application is now in maintenance mode.');
  }
}
