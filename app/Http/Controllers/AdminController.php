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
      $title = "Admin Dashboard";
      return view('admin.index', compact('title'));
  }

  /**
   * Display the Admin Settings.
   *
   * @return \Illuminate\Http\Response
   */
  public function settings()
  {
      $title = "Admin Settings";
      return view('admin.settings', compact('title'));
  }
}
