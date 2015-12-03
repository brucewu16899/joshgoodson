<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Contact
Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('contact'));
});

// Blog
Breadcrumbs::register('blog', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('page', function($breadcrumbs, $page)
{
    $breadcrumbs->parent('category', $page->category);
    $breadcrumbs->push($page->title, route('page', $page->id));
});

// User Register
Breadcrumbs::register('register', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Register', route('register'));
});

// User Forgot Password
Breadcrumbs::register('forgotPassword', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Forgot Password', route('forgotPassword'));
});

// My Tasks
Breadcrumbs::register('tasks', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('My Tasks', route('tasks'));
});

// Not Found
Breadcrumbs::register('404', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('PAGE NOT FOUND');
});
