<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function changeLang($locale)
    {
        $cookie = cookie('my_locale',$locale,45000);
        return redirect()->back()->cookie($cookie);
    }

}
