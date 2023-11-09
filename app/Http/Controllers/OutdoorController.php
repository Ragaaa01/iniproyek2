<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outdoor;
use App\Http\Requests\Admin\OutdoorStoreRequest;
use Illuminate\Support\Str;

class OutdoorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outdoor = Outdoor::latest()->get();

        return view('admin.outdoor.index', compact('outdoor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.outdoor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OutdoorStoreRequest $request)
    {
        if ($request->validated()){
            $gambar = $request->file('gambar')->store('assets/outdoor', 'public');
            $slug = Str::slug($request->nama_barang, '-');
            Outdoor::create($request->except('gambar') + ['gambar' => $gambar, 'slug' => $slug]);
        }

        return redirect()->route('outdoor.index')->with([
            'message' => 'data sukses dibuat',
            'alert-type' => 'success',
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
