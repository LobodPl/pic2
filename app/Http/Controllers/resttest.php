<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Requests;
use App\Data;

class resttest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all(array('id','name'));
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $name = $request->input('name');
        Data::create(array('name' => $name));
        $data = Data::where('name', $name)->first();
        return $data;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Data::find($id);
        if($data == null) {   
            return abort(404, 'File not found.');}
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dane = $request->input('name');
        $rep = Data::find($id);
        $rep->name = $dane;
        $rep->save();
        return abort(204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Data::find($id);
        $del->delete();
        return abort(204);
    }
}
