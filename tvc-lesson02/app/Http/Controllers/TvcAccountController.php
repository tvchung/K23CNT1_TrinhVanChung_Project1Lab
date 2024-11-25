<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TvcAccountController extends Controller
{
    //
    public function index(){
        return "<h1> Welcome to, Trịnh Văn Chung - Controller </h1>";
    }

    // create form
    public function create() {
        return view('tvc-account-create');
    }
}
