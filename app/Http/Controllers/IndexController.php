<?php

namespace App\Http\Controllers;

use App\Models\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index.index',[
            'title' => 'Home Book'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Index $index)
    {
        return view('index.baca',[
            'title'=>'laman Baca',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Index $index)
    {
        //
    }
}
