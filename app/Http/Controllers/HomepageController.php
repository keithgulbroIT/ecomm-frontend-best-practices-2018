<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('pages.home');
	}
}
