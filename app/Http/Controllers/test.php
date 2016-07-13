<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Filesystem\Filesystem;

class Test extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obr = array('pic');
        $naz = array('nazwa');
        $wie = array('0');
        $ilosc = 0;
        if ($handle = opendir('./pic')) {

    /* This is the correct way to loop over the directory. */
            while (false !== ($entry = readdir($handle))) {
                if (($entry !== ".")&&($entry !== "..")){
                    array_push($obr, "./pic/".$entry);
                    array_push($naz, $entry);
                    array_push($wie, filesize("./pic/".$entry));
                    $ilosc++;
                }
            }

    closedir($handle);
    }
    return view('page',array('obr' =>$obr,'ilosc' =>$ilosc,'name' => $naz,'wielkosc' => $wie ));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
