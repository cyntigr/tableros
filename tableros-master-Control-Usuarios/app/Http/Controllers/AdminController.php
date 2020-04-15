<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	/**
	 * @return
	 */
    public function index()
    {
    	return view('admin.index') ;
    }
}
