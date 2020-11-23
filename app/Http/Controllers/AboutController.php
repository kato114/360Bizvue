<?php
namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('about.index');
    }
}