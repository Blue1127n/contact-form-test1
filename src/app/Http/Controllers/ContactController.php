<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }

public function confirm(Request $request)
{
    $contact = $request->only(['first-name','last-name','gender', 'email', 'tel','address','building','select', 'content']);
    return view('confirm', compact('contact'));
}

public function store()
{
    $contact = $request->only(['first-name','last-name','gender', 'email', 'tel','address','building','select', 'content']);
}
}