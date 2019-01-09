<?php

namespace App\Http\Controllers;
use App\ModelEmail;
use Illuminate\Http\Request;

class emailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $data = ModelEmail::all();
        return response($data);
    }
    public function show($id){
        $data = ModelEmail::where('id',$id)->get();
        return response ($data);
    }
    public function update(Request $request, $id){
        $data = ModelEmail::where('id',$id)->first();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->description = $request->input('description');
        $data->save();
    
        return response('Berhasil Merubah Data');
    }
    public function add (Request $request){
        $data = new ModelEmail();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->description = $request->input('description');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }

    public function delete($id){
        $data = ModelEmail::where('id',$id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }


}