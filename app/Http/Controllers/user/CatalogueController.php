<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\tb_catalogues;
use App\Models\tb_category;
use App\Models\tb_settings;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        $categories = tb_category::all();
        $catalogues = tb_catalogues::all();
        $settings = tb_settings::all();

        return view('pages.catalogue', compact('categories', 'catalogues', 'settings'));
    }

    public function detail(Request $request, $id)
    {
        $category = tb_category::all();
        $catalogue = tb_catalogues::find($id);
        $settings = tb_settings::all();

        if (!$catalogue) {
            abort(404);
        }

        return view('pages.catalogue-detail', compact('category', 'catalogue', 'settings'));
    }
}
