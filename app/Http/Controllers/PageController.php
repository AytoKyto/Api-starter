<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = DB::select('select * from pages');
        return $results;
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pages = DB::table('pages')->insert([
            'title' => $request->title,
            'author' => $request->author,
            'publi_type' => $request->publi_type,
            'title_seo' => $request->title_seo,
            'content_seo' => $request->content_seo,
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
        $results = DB::select('select * from pages where id in (' . $id . ')');
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
        $pages = DB::table('pages')->where('id', $id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'publi_type' => $request->publi_type,
            'title_seo' => $request->title_seo,
            'content_seo' => $request->content_seo,
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
        $pages = DB::table('pages')->where('id', $id)->delete();
        return response()->json(['message' => 'This is a DELETE request'], 204);
    }
}
