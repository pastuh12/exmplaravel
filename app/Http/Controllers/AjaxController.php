<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function forGetAjax():view
    {
        return view('modal.forAjax');
    }

    /**
     * @param Request $request
     */
    public function forPostAjax(Request $request):void
    {
        $user = User::create(['name' => $request->name, 'email' => $request->email]);

        //$user->save();
    }
}
