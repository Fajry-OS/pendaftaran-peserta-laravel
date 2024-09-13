<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Http\Request;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombang = Gelombang::orderBy('nama_gelombang', 'asc')->get();
        return view('gelombang.index', compact('gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gelombang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_gelombang' => 'required|string',
        ]);
        Gelombang::create($request->all());

        // Alert::success('Success Title', 'Success Message');
        return redirect()->route('gelombang.index')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gelombang = Gelombang::findOrFail($id);
        return view('gelombang.edit', compact('gelombang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gelombang = Gelombang::findOrFail($id);
        $request->validate([
            'nama_gelombang' => 'required|string',
        ]);

        $gelombang->nama_gelombang = $request->nama_gelombang;
        $gelombang->save();

        return redirect()->route('gelombang.index')->with('success', 'Update Jurusan berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gelombang = Gelombang::findOrFail($id);
        $gelombang->delete();

        return redirect()->route('gelombang.index')->with('success', 'Data berhasil di delete sementara');
    }

    public function updateStatus(Request $request, $id)
    {
        $gelombang = Gelombang::find($id);
        $gelombang->aktif = $request->input('aktif');
        $gelombang->save();

        return redirect()->back()->with('success', 'Status Berhasil Di Update');
    }
}
