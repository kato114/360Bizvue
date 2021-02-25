<?php
namespace App\Http\Controllers;

class OtherController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }

    public function contentmarketing()
    {
        return view('other.contentmarketing');
    }
}