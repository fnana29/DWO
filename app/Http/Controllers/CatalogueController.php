<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_catalogues;
use App\Models\tb_category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CatalogueController extends Controller
{
    public function index()
    {
        $catalogue = tb_catalogues::with(['user', 'category'])->paginate(10);

        return view('pages.admin.catalogue.index', compact('catalogue'));
    }

    public function create()
    {
        $category = DB::table('tb_categories')->get();
        $users = DB::table('users')->get();

        return view('pages.admin.catalogue.create', compact('category', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'package_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $catalogue = new tb_catalogues();
        $catalogue->package_name = $request->package_name;
        $catalogue->description = $request->description;
        $catalogue->price = $request->price;
        $catalogue->category_id = $request->category_id;
        $catalogue->user_id = Auth::id();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = $catalogue->catalogue_id . '_' . str_replace(' ', '_', $catalogue->package_name) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/catalogue', $newImageName);
            $catalogue->image = 'storage/catalogue/' . $newImageName;
        }

        $catalogue->save();

        return redirect()->route('catalogue.index')->with('success', 'Data Katalog berhasil dibuat');;
    }

    public function edit($id)
    {
        $catalogue = tb_catalogues::with(['user', 'category'])->find($id);
        $categories = tb_category::all();

        return view('pages.admin.catalogue.edit', compact('catalogue', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable',
            'package_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $catalogue = tb_catalogues::find($id);
        $catalogue->package_name = $request->package_name;
        $catalogue->description = $request->description;
        $catalogue->price = $request->price;
        $catalogue->category_id = $request->category_id;
        $catalogue->user_id = Auth::id();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = $catalogue->catalogue_id. '_'. str_replace(' ', '_', $catalogue->package_name). '.'. $image->getClientOriginalExtension();
            if ($catalogue->image) {
                unlink(($catalogue->image));
            }
            $image->storeAs('public/catalogue', $newImageName);
            $catalogue->image ='storage/catalogue/'. $newImageName;
        }

        $catalogue->save();

        return redirect()->route('catalogue.index')->with('success', 'Data Katalog berhasil diubah');
    }

    public function destroy($id)
    {
        $catalogue = tb_catalogues::find($id);

        if ($catalogue->image) {
            $imagePath = public_path($catalogue->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $catalogue->delete();

        return redirect()->route('catalogue.index')->with('success', 'Data Katalog berhasil dihapus');
    }
}
