<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Levels::orderBy('id', 'desc')->get();
        return view('roles.index', compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_level' => 'required|string',
        ]);
        Levels::create($request->all());

        // Alert::success('Success Title', 'Success Message');
        return redirect()->route('roles.index')->with('success', 'Data Berhasil Ditambah');
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
        $level = Levels::findOrFail($id);
        return view('roles.edit', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $level = Levels::findOrFail($id);
        $request->validate([
            'nama_level' => 'required|string',
        ]);

        $level->nama_level = $request->nama_level;
        $level->save();

        return redirect()->route('roles.index')->with('success', 'Update Level berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $level = Levels::findOrFail($id);
        $level->delete();

        return redirect()->route('roles.index')->with('success', 'Data berhasil di delete sementara');
    }
}
