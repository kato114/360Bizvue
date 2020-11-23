<?php
namespace App\Http\Controllers;

class ContactController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('contact.index');
    }

    public function es_index()
    {
        return view('contact.es_index');
    }
}