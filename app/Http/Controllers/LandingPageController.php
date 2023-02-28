<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        //$funds=Fund::latest('id')->get();
        $funds = Fund::latest()->paginate(3);
        return view('welcome',compact('funds'));
    }
}
