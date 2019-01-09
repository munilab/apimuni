<?php

namespace App\Http\Controllers;
use App\ModelDegelation;
use Illuminate\Http\Request;

class DegelationController extends Controller
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
        $data = ModelDegelation::all();
        return response($data);
    }
    public function show($id){
        $data = ModelDegelation::where('id',$id)->get();
        return response ($data);
    }



}