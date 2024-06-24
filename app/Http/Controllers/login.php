<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function req(Request $request)
    {
        // İstenen işlemleri burada yapabilirsiniz
    }
}
