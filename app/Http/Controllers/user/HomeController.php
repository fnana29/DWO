<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\tb_catalogues;
use App\Models\tb_category;
use App\Models\tb_settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = tb_category::all();
        $catalogues = tb_catalogues::all();
        $settings = tb_settings::all();

        return view('pages.index', compact('categories', 'catalogues', 'settings'));
    }
}
