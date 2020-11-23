<?php
namespace App\Http\Controllers;

class KassaController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('kassa.index');
    }
}