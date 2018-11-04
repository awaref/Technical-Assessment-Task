<?php

namespace App\Http\Controllers;
use App\Admin;
use App\User;
use App\Company;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=User::count();
        $companies=Company::count();
       
        return view('admin/dashboard',compact('employees','companies'));
    }

}
