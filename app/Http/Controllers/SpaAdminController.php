<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaAdminController extends Controller
{
    public function index(){
        return view("admin");
    }
}
