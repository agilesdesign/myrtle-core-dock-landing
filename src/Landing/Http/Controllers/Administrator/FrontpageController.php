<?php

namespace Myrtle\Core\Landing\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;

class FrontpageController extends Controller {

	public function index()
	{
		return view('admin::frontpage.index');
	}
}
