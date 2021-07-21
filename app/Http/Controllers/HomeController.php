<?php


namespace App\Http\Controllers;


//use http\Env\Request;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index():view
    {
        return view('welcome');
    }
    public function test():view
    {
        return view('test/test');
    }

    /**
     * @param $id - id пользователя
     * @return view
     */
    public function testDetail(Request $request,int $id):view
    {
        return view('test.test', ['id' => $id] );
    }

    /**
     * @param Request $request
     * @return view
     */
    public function testForm(Request $request):view
    {
        if ($request->ajax()){
            return view('modal.forAjax');
        }
        else {
            return view('test.testForm');

        }
    }
}
