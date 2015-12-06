<?php

namespace JoshGoodson\Http\Controllers;

use Illuminate\Http\Request;

use JoshGoodson\Http\Requests;
use JoshGoodson\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Display the user dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('dashboard.index', ['title' => 'Dashboard']);
  }

  /**
   * Display the user's settings.
   *
   * @return \Illuminate\Http\Response
   */
  public function settings()
  {
      return view('dashboard.settings', ['title' => 'My Settings']);
  }
}
