<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __invoke()
    {
        return view('home/index');
    }
    public function basic_table()
    {
        return view('home/basic-table');
    }
    public function profile()
    {
        return view('home/profile');
    }
    public function fontawesome()
    {
        return view('home/fontawesome');
    }
    public function map_google()
    {
        return view('home/map-google');
    }
    public function blank()
    {
        return view('home/blank');
    }
    public function fallback()
    {
        return view('home/404');
    }
}
