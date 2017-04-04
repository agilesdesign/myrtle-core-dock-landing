<?php

namespace Myrtle\Core\Landing\Http\Controllers;

use App\Http\Controllers\Controller;

class LandingController extends Controller {

	public function index()
	{
		return view('landing::index');
	}
}
