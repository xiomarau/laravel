<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create (){

        return view('create');

    }

    public function store(Request $request){

        return $request;
    }
}    