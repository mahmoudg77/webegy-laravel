<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    //
	function index($pars){
		return "Welcome $pars";
	}
}
