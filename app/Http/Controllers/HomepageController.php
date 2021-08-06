<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //


    public function homepage()
    {
        return view("users.homepage");
    }

    public function cartpage()
    {
        return view("users.cart");
    }

    public function wishlistpage()
    {
        return view("users.wishlist");
    }

    public function deliverpage()
    {
        return view("users.delivery_information");
    }
}
