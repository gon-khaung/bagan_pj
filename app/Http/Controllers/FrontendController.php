<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function pagodas(){
        return view('frontend.pagoda');
    }
    public function pagoda_solo(){
        return view('frontend.pagodaSolo');
    }
    public function hotels(){
        return view('frontend.hotel');
    }
    public function hotel_solo(){
        return view('frontend.hotelSolo');
    }
    public function about(){
        return view('frontend.about');
    }
    public function articles(){
        return view('frontend.article');
    }
}
