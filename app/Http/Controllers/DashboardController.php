<?php

namespace App\Http\Controllers;

use App\Models\tb_catalogues;
use App\Models\tb_order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCatalogues = tb_catalogues::count();
        $totalOrder = tb_order::count();
        $totalAdmin = User::where('role', 'admin')->count();
        $totalUser = User::where('role', 'user')->count();

        return view('pages.admin.index', [
            'totalCatalogues' => $totalCatalogues,
            'totalOrder' => $totalOrder,
            'totalAdmin' => $totalAdmin,
            'totalUser' => $totalUser,
        ]);
    }
}
