<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use stdClass;

class ParameterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function index(){

        // return view('front/parameter')->with('data',0);
        return view('front/parameter')->with(['data'=>0,'data2'=>'data2']);
    }
    public function indexdata(){
        $data=[];
        $data['name']='Ali';
        $data['email']='ss@hh.com';
  
        return view('front/parameter',$data);
    }


    public function indexdata1(){
        $obj=new stdClass();
        $obj->name='Ali';
        $obj->email="ss.com";
        
        return view('front/parameter',compact('obj'));
    }

    public function indexdata2(){
        $data=['ali','hassan','mhummad'];
        $data1=[];
        return view('front/parameter',compact('data','data1'));
    }
}
