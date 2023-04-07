<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogController extends Controller
{
  public function loginData(Request $request)
  {

    if ($request->isMethod('POST')) {
      return view('admin.login', $request->post());
    };
    return view('admin.login', ['email' => $request->query('email'), 'pass' => $request->query('pass')]);
  }

  public function registerData(Request $request)
  {

    if ($request->isMethod('POST')) {
      return view('admin.register', $request->post());
    };
  }
}
