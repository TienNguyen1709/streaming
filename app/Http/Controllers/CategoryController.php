<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list_category(){
        return view ('admin.category_list');
    }

    public function add_category(){
        return view ('admin.category_add');
    }

    public function edit_category(){
        return view ('admin.category_edit');
    }
}
