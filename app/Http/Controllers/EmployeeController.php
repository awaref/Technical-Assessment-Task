<?php

namespace App\Http\Controllers;
use App\User;
use App\Company;
use Hash;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $employees=User::all();
       return view('admin.employees.index', compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::pluck('Name','id')->all();
        return view('admin.employees.create',compact('companies'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|regex:/^[A-Za-z0-9\.]*@(femto15)[.](com)$/',
            'phone' => 'required|regex:/0[0-9]{10}/',
            'password' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);

        $employee = new User;

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->password = Hash::make($request->password);
        $request->company_id;
        $employee->company_id = $request->company_id;

        $employee->save();

        $notification = array(
            'message' => 'Successfully Created ',
            'alert-type' => 'success'
        );
        return redirect('/admin/employees');
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
        $companies = Company::pluck('Name','id')->all();
        $employee = User::findOrFail($id);



        return view('admin.employees.edit', compact('employee','companies'));
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
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|regex:/^[A-Za-z0-9\.]*@(femto15)[.](com)$/',
            'phone' => 'required|regex:/0[0-9]{10}/',
            
        ]);
        
    

        $employee = User::findOrFail($id);


        if(trim($request->password) == ''){

            $input = $request->except('password');
            $employee->company_id = $request->company_id;

        } else{


            $input = $request->all();

            $input['password'] = bcrypt($request->password);
            $employee->company_id = $request->company_id;

        }

        //dd($input);
     
        $employee->update($input);


        return redirect('/admin/employees');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = User::findOrFail($id);

        $employee->delete();
        $notification = array(
            'message' => 'Successfully Deleted ',
            'alert-type' => 'success'
        );

        return redirect('/admin/employees');
    }
}
