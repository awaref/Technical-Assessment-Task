@extends('admin.master')

@section('content')



    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="page-wrapper">


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Employees</h4>
                    <h6 class="card-subtitle">Create Employee</h6>


                    {!! Form::open(['method'=>'POST', 'action'=> 'EmployeeController@store']) !!}


                    <div class="form-group" required >
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, [
	                             'class' => 'form-control',
	                             'required' => 'required',
	                     ])!!}

                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null,[
	                             'class' => 'form-control',
	                             'required' => 'required',
	                     ])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password:') !!}
                        {{ Form::password('password', array('class'=>'form-control','required' => 'required' ) ) }}

                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Phone:') !!}
                        {!! Form::text('phone', null, [
	                             'class' => 'form-control',
	                             'required' => 'required',
	                     ])!!}
                    </div>
                   
                            <div class="form-group">
                                {{ Form::label('company_id', 'Company:') }}
                                {{ Form::select('company_id', [''=>'Choose Company'] + $companies , null, [
                                         'class' => 'form-control py-0',
                                         'required' => 'required',
                                 ])}}
                            </div>
                     
                  

                    <div class="form-group">
                        {!! Form::submit('Create Employee', ['class'=>'btn btn-primary']) !!}
                    </div>


                    {!! Form::close() !!}


                </div>
            </div>

        @include('include/form_error')
            </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->




    @stop

