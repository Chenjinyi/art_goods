<?php

namespace App\Http\Controllers;

use App\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //首页
    public  function index(){
        $index = Index::all()->first();
        return view("index",compact('index'));
    }
}
