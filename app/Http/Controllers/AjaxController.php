<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function forGetAjax()
    {
        return view('modal/forAjax');
    }

    public function forPostAjax(Request $request)
    {
        $user = new User();
        $user->fillable([$request->name, $request->email]);
        $user->save();
    }
}
