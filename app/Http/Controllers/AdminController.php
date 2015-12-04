<?php

namespace JoshGoodson\Http\Controllers;

use Illuminate\Http\Request;

use JoshGoodson\Http\Requests;
use JoshGoodson\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display the Admin Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
}
