<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
        public function index(){
            return view('admin.dashboard');
        }
    public function Productdetails(){
        $pro = Product::all();
        return view('admin.productdetails',compact('pro'));
    }

    public function userDetails(){
        $data = User::all();
        return view('admin.adminregister',compact('data'));
    }

    public function UserReg(){
        return view('auth.register');
    }
  
}
