<?php

namespace App\Http\Controllers;
use App\ModelUser;
use Illuminate\Http\Request;

class userController extends Controller
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
        $data = ModelUser::all();
        return response($data);
    }
    public function show($id){
        $data = ModelUser::where('id',$id)->get();
        return response ($data);
    }
    public function update(Request $request, $id){
        $data = ModelUser::where('id',$id)->first();
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->gender = $request->input('gender');
        $data->phone = $request->input('phone');
        $data->status = $request->input('status');
        $data->save();
    
        return response('Berhasil Merubah Data');
    }
    public function add (Request $request){
        $data = new ModelUser();
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->gender = $request->input('gender');
        $data->phone = $request->input('phone');
        $data->status = $request->input('status');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }

    public function delete($id){
        $data = ModelUser::where('id',$id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }


}