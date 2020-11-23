<?php
namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    public function digital()
    {
        return view('service.digital');
    }

    public function competitor()
    {
        return view('service.competitor');
    }

    public function discount()
    {
        return view('service.discount');
    }

    public function florida()
    {
        return view('service.florida');
    }

    public function es_digital()
    {
        return view('service.es_digital');
    }

    public function es_discount()
    {
        return view('service.es_discount');
    }
}