<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

        public function index(){

            $laptops=Product::all();

            return view('front.home',compact('laptops'));

        }



        public function laptops(){

            $laptops=Product::all();
            return view('front.laptops',compact('laptops'));





        }


}
