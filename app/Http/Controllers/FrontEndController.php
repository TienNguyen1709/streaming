<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
session_start();

class FrontEndController extends Controller
{
    public function index(){
        $show_video = Video::where('status','1')->get();
    	return view ('content', compact('show_video'));
    }
}
