<?php

namespace App\Http\Controllers;

use App\Models\tb_order;
use Illuminate\Http\Request;

class OrderReportController extends Controller
{
    public function index(Request $request)
    {
        $orderReport = tb_order::with(['catalogue', 'user'])
            ->when($request->input('package_name'), function ($query, $package_name) {
                $query
                    ->whereHas('catalogue', function ($query) use ($package_name) {
                        $query->where('package_name', 'like', '%' . $package_name . '%');
                    })
                    ->orWhere('status', 'like', '%' . $package_name . '%');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.admin.order_report.index', compact('orderReport'));
    }
}
