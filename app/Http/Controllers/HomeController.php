<?php


namespace App\Http\Controllers;


//use http\Env\Request;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function test()
    {
        return view('test/test');
    }
    public function testDetail($id)
    {
        return view('test/test', ['id' => $id] );
    }

    public function testForm(Request $request)
    {
        if ($request->ajax() === true){
            $ajax = new AjaxController();
            return $ajax->forGetAjax();
        }
        else {
            return view('test/testForm');

        }
    }
}
