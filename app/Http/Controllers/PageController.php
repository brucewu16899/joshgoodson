<?php

namespace JoshGoodson\Http\Controllers;

use Illuminate\Http\Request;

use JoshGoodson\Http\Requests;
use JoshGoodson\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display the Home page resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('welcome', ['title' => 'josh goodson', 'icon' => 'align-justify']);
    }

    /**
     * Display the About page resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about', ['title' => 'About']);
    }

    /**
     * Display the Contact page resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact', ['title' => 'Contact']);
    }
}
