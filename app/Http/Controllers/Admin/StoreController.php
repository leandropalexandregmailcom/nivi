<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.index');
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Store::create([
            "name"          => $request->name,
            "description"   => $request->description,
            "about_us"      => $request->about_us,
            "user_id"       => $request->user_id,
            "url"           => $request->url,
            "logo"          => $request->logo
        ]);

        return view('store.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('store.index',[Store::where([
            'user_id' => $request->user_id,
            'id'      => $request->id
        ])->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Store::where([
            'user_id' => $request->user_id,
            'id'      => $request->id
        ])->update([
            "name"          => $request->name,
            "description"   => $request->description,
            "about_us"      => $request->about_us,
            "user_id"       => $request->user_id,
            "url"           => $request->url,
            "logo"          => $request->logo
        ]);

        return response()->json([
            'message' => 'updated',
            'status'  => 200,
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Store::where([
            'user_id' => $request->user_id,
            'id'      => $request->id
        ])->delete();

        return response()->json([
            'message' => 'deleted',
            'status'  => 200,
            'success' => true
        ]);
    }
}
