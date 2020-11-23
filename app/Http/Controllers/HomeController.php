<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('home.index');
    }

    public function es_index()
    {
        return view('home.es_index');
    }
}