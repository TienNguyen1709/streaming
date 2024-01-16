<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list_product(){
        return view ('admin.product_list');
    }

    public function add_product(){
        return view ('admin.product_add');
    }

    public function edit_product(){
        return view ('admin.product_edit');
    }
}
