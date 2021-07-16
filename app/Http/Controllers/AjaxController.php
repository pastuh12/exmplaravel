<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function forAjaxUp()
    {
        return view('modal/forAjax');
    }
}
