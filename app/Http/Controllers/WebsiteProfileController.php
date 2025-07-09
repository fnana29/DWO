<?php

namespace App\Http\Controllers;

use App\Models\tb_settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebsiteProfileController extends Controller
{
    public function index()
    {
        $settings = tb_settings::with('user')->orderBy('id', 'asc')->get();

        return view('pages.admin.settings.index', compact('settings'));
    }

    public function edit($id)
    {
        $settings = tb_settings::with('user')->find($id);

        return view('pages.admin.settings.edit', compact('settings'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'phone_number' => 'nullable',
            'email' => 'nullable',
            'address' => 'nullable',
            'instagram' => 'nullable',
            'time_business_hour' => 'nullable',
        ]);

        $settings = tb_settings::find($id);
        $settings->phone_number = $request->phone_number;
        $settings->email = $request->email;
        $settings->address = $request->address;
        $settings->instagram = $request->instagram;
        $settings->time_business_hour = $request->time_business_hour;
        $settings->user_id = Auth::id();

        $settings->save();

        return redirect()->route('settings.index')->with('success', 'Data Website berhasil diubah');
    }
}
