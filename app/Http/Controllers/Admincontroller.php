<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
	public function __construct()
    {
        $this->middleware('Myadmin');
    }

    public function admindashboard()
    {
        return view('admin.dashboard');
    }

    public function schools()
    {
        return view('admin.schools');
    }


    public function banners()
    {
        return view('admin.banners');
    }

    public function enquires()
    {
        return view('admin.enquires');
    }
}
