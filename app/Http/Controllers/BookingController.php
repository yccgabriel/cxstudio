<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BookingController extends Controller
{
    protected function summary()
    {
    	return View('pages.booking.summary');
    }

    protected function payment()
    {
    	return View('pages.booking.payment');
    }

    protected function confirm()
    {
    	return View('pages.booking.confirm');
    }
}
