<?php

namespace JoshGoodson\Http\Controllers;

use Illuminate\Http\Request;

use JoshGoodson\Http\Requests;
use JoshGoodson\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display the Search results.
     *
     * @param  string  $term
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request, $term)
    {
        return view('search');
    }
}
