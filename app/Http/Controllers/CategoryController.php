<?php

namespace App\Http\Controllers;

use App\Models\tb_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = tb_category::with('users')->get();
        $category = tb_category::query()->paginate(10);

        return view('pages.admin.category.index', compact('category'));
    }

    public function create()
    {
        $users = DB::table('users')->get();
        return view('pages.admin.category.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'description' =>'nullable',
        ]);

        $category = new tb_category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->user_id = Auth::id();

        $category->save();

        return redirect()->route('category.index')->with('success', 'Data Kategori berhasil dibuat');
    }

    public function edit($id)
    {
        $category = tb_category::findOrFail($id);
        $users = DB::table('users')->get();
        return view('pages.admin.category.edit', compact('category', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required',
            'description' =>'nullable',
        ]);

        $category = tb_category::findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->user_id = Auth::id();

        $category->save();

        return redirect()->route('category.index')->with('success', 'Data Kategori berhasil diubah');
    }

    public function destroy($id)
    {
        $category = tb_category::find($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Data Kategori berhasil dihapus');
    }
}
