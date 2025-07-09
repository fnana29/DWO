<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tb_order;
use Illuminate\Http\Request;
use App\Models\tb_catalogues;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $order = tb_order::with(['catalogue', 'user'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.admin.order.index', compact('order'));
    }

    public function create()
    {
        $catalogue = DB::table('tb_catalogues')->get();
        $users = DB::table('users')->get();

        return view('pages.admin.order.create', compact('catalogue', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'catalogue_id' => 'required',
            'wedding_date' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ]);

        $order = new tb_order();
        $order->catalogue_id = $request->catalogue_id;
        $order->wedding_date = $request->wedding_date;
        $order->status = $request->status;
        $order->user_id = $request->user_id;

        $order->save();

        return redirect()->route('order.index')->with('success', 'Data Pemesanan Berhasil Dibuat');
    }

    public function edit($id)
    {
        $order = tb_order::find($id);
        $catalogue = DB::table('tb_catalogues')->get();
        $users = DB::table('users')->get();

        return view('pages.admin.order.edit', compact('order', 'catalogue', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'catalogue_id' => 'required',
            'wedding_date' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ]);

        $order = tb_order::find($id);
        $order->catalogue_id = $request->catalogue_id;
        $order->wedding_date = $request->wedding_date;
        $order->status = $request->status;
        $order->user_id = $request->user_id;

        $order->save();

        return redirect()->route('order.index')->with('success', 'Data Pemesanan Berhasil Diubah');
    }

    public function destroy($id)
    {
        $order = tb_order::find($id);
        $order->delete();

        return redirect()->route('order.index')->with('success', 'Data Pemesanan Berhasil Dihapus');
    }
}
