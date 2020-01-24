<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('pages.products');
    }
    public function ListProducts(){
        return view('pages.products-list');
    }
    public function DetailProducts(){
        return view('pages.products-details');
    }
}


class agenceAController extends Controller
{
    public function index(){
        return view('pages.agenceA');
    }
}