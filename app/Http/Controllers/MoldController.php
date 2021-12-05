<?php

namespace App\Http\Controllers;

use App\Models\Mold;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $molds = Mold::all();

        return response()->json($molds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $mold = Mold::create($request->all());

        return response()->json($mold);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mold  $mold
     * @return \Illuminate\Http\Response
     */
    public function show(Mold $mold)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mold  $mold
     * @return \Illuminate\Http\Response
     */
    public function edit(Mold $mold)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mold  $mold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mold $mold)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mold  $mold
     * @return JsonResponse
     */
    public function destroy(Mold $mold)
    {
        Mold::destroy($mold->id);
        return response()->json(['success' => true]);
    }
}
