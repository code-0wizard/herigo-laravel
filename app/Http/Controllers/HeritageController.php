<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeritageController extends Controller
{
  public function index()
  {
		return view('heritages.index');
  }
}