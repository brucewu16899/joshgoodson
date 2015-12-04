<?php

namespace JoshGoodson\Http\Controllers;

use Illuminate\Http\Request;

use JoshGoodson\Http\Requests;
use JoshGoodson\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }
}
