<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	
    protected function beforepurchase()
    {
    	return View('pages.homebefore');
    	// return View('pages.home')->with('offers', $this->offers->get());
    }

    protected function afterpurchase()
    {
    	return View('pages.homeafter');
    	// return View('pages.home')->with('offers', $this->offers->get());
    }
}
