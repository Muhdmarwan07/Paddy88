<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SuperSellerController extends Controller
{
    public function indexx()
    {
    	$this->SellerAuthCheck();
    	return view('seller.seller_dashboard');
    }

    public function logout()
    {
    	Session::flush();
    	return Redirect::to('/seller');
    }

<<<<<<< HEAD
    public function SellerAuthCheck()
=======
    public function AdminAuthCheck()
>>>>>>> no message
    {
    	$seller_id=Session::get('seller_id');
    	if ($seller_id)
        {
    		return;
    	}
    	else
    	{
    		return Redirect::to('/seller')->send();
    	}
    }
}
