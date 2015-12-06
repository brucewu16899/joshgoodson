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
    $breadcrumbs->push('Forgot Password', route('password.forgot'));
});

// User Dashboard
Breadcrumbs::register('dashboard', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('dashboard'));
});

// User Profile
Breadcrumbs::register('dashboard.profile', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Profile', route('users.profile'));
});

// User Settings
Breadcrumbs::register('dashboard.settings', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('My Settings', route('dashboard.settings'));
});

// My Tasks
Breadcrumbs::register('tasks.index', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('My Tasks', route('tasks.index'));
});
// View Task
Breadcrumbs::register('tasks.show', function($breadcrumbs, $task)
{
    $breadcrumbs->parent('tasks.index');
    $breadcrumbs->push('View Task', route('tasks.show', ['id' => $task->id]));
});
// Edit Task
Breadcrumbs::register('tasks.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('tasks.index');
    $breadcrumbs->push('Edit Task', route('tasks.edit'));
});

// My Inbox
Breadcrumbs::register('messages.index', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('My Inbox', route('messages.index'));
});
// Create Message
Breadcrumbs::register('messages.create', function($breadcrumbs)
{
    $breadcrumbs->parent('messages.index');
    $breadcrumbs->push('New Message', route('messages.create'));
});
// View Message
Breadcrumbs::register('messages.show', function($breadcrumbs)
{
    $breadcrumbs->parent('messages.index');
    $breadcrumbs->push('View Message', route('messages.show'));
});

// Not Found
Breadcrumbs::register('404', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('PAGE NOT FOUND');
});

// Forbidden
Breadcrumbs::register('403', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('FORBIDDEN');
});

// Roles
Breadcrumbs::register('roles.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Roles', route('roles.index'));
});
// View Role
Breadcrumbs::register('roles.show', function($breadcrumbs, $role)
{
    $breadcrumbs->parent('roles.index');
    $breadcrumbs->push($role->display_name, route('roles.show', ['id' => $role->id]));
});
// Create Role
Breadcrumbs::register('roles.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Create Role', route('roles.create'));
});
// Edit Role
Breadcrumbs::register('roles.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Edit Role', route('roles.create'));
});
