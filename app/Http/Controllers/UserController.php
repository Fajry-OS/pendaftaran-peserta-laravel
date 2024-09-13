<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Levels;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = Levels::all();
        $jurusan = Jurusan::all();
        return view('users.create', compact('level', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required',
            'id_level' => 'required'
        ]);
        $val['password'] = Hash::make($val['password']);
        User::create($val);
        return redirect()->route('users.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $level = Levels::all();
        $user = User::find($id);
        return view('users.edit', compact('level', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'nama_lengkap' => 'required|string|max:55',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string',
            'id_level' => 'required'
        ]);
        //Jika password diisi maka update password
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->nama_lengkap = $request->nama_lengkap;
        $user->email = $request->email;
        $user->id_level = $request->id_level;

        $user->save();
        return redirect()->route('users.index')->with('success', 'Update User berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Data berhasil di delete sementara');
    }
}
