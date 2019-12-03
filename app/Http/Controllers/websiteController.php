<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class websiteController extends Controller
{
  /**
   * [index description]
   * @return [type] [description]
   */
  public function index()
  {
      $services = App\Service::all();
      return view('welcome', compact('services'));
  }
}
