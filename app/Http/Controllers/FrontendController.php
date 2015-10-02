<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function getIndex()
    {
        return view('frontend.index')
            ->with('title', 'Dashboard');
    }

    public function getItem()
    {
        return view('frontend.shop')
            ->with('title', 'Dashboard');
    }

    public function getDetailItem()
    {
        return view('frontend.detail_item')
            ->with('title', 'Dashboard');
    }

    public function getCart()
    {
        return view('frontend.cart')
            ->with('title', 'Dashboard');
    }

    public function getCheckout()
    {
        return view('frontend.checkout')
            ->with('title', 'Dashboard');
    }

}
