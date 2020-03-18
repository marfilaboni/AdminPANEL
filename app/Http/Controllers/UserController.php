<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
        $allUser=User::orderBy('id','DESC')->get();
        return view('admin.user.all',compact('allUser'));
    }

    public function add(){
    	return view('admin.user.add');
    }

    public function edit(){
    	
    }

    public function view($id){
        $data=User::where('id',$id)->firstORFail();
    	return view('admin.user.view',compact('data'));
    }
}
