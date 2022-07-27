<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = DB::select('select * from component');
        return $results;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return response()->json(['message' => 'This is a GET request'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $component = DB::table('component')->insert([
            'id_pages' => $request->id_pages,
            'title' => $request->title,
            'image' => $request->image,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        return response()->json(['message' => 'This is a POST request'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = DB::select('select * from component where id in (' . $id . ')');
        return $results;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $component = DB::table('component')->where('id', $id)->update([
            'id_pages' => $request->id_pages,
            'title' => $request->title,
            'image' => $request->image,
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        return response()->json(['message' => 'This is a PUT request'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $component = DB::table('component')->where('id', $id)->delete();
        return response()->json(['message' => 'This is a DELETE request'], 204);
    }
}
