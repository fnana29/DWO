<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\tb_settings;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $settings = tb_settings::all();

        return view('pages.contact', compact('settings'));
    }
}
