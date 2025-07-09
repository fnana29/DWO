<?php

namespace App\Http\Controllers\user;

use App\Models\tb_settings;
use App\Models\User;
use App\Models\tb_order;
use Illuminate\Http\Request;
use App\Models\tb_catalogues;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $request, $id)
    {
        $catalogue = tb_catalogues::find($id);
        $user = auth()->user();
        $order = tb_order::where('catalogue_id', $id)->first();
        $settings = tb_settings::all();

        if (!$catalogue) {
            abort(404);
        }

        if (!$user) {
            abort(403, 'Harap Login Terlebih Dahulu');
        }

        return view('pages.order-form', compact('catalogue', 'user', 'order', 'settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'catalogue_id' => 'required|exists:tb_catalogues,catalogue_id',
            'wedding_date' => 'required',
        ]);

        $order = new tb_order;
        $order->catalogue_id = $request->catalogue_id;
        $order->wedding_date = $request->wedding_date;
        $order->user_id = Auth::id();
        $order->status = 'requested';

        $order->save();

        return redirect('/')->with('success', 'Pengajuan Pemesanan Berhasil Dibuat');
    }
}
