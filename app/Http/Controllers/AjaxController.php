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
        $user = new User();
        $user->name = $request->all()['name'];
        $user->email = $request->all()['email'];

        //$user->save();
    }
}
