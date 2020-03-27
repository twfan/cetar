<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerReport extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = \App\Problem::all();
        if(count($data) > 0){
            $res['messages'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }else{
            $res['message'] = "Empty!";
            return response($res);
        }
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
        $data = new \App\Problem();
        $data->nama = $request->input('nama');
        $data->menu = $request->input('menu');
        $data->subMenu = $request->input('submenu');
        $data->lokasi = $request->input('lokasi');
        $data->deskripsi = $request->input('deskripsi');
        if($request->file('imagePath')){
            // $realImage = base64_decode($request->file('imagePath'));
            $image_path = $request->file('imagePath')->store('report_images', 'public');
            $data->imagePath =  $image_path;
        }
        $data->save();
        return response($data);
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
        $data = \App\Problem::where('id', $id)->get();
        if(count($data) > 0){
            $res['messages'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }else{
            $res['message'] = "Failed!";
            return response($res);
        }
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
