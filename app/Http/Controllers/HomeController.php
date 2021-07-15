<?php


namespace App\Http\Controllers;


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

    public function testForm()
    {
        return view('test/testForm');
    }
}
