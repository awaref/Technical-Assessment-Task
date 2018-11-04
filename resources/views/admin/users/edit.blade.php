@extends('admin.master')

@section('content')

    <div class="page-wrapper">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Users</h4>
            <h6 class="card-subtitle">Edit User</h6>




            {!! Form::model($admin, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $admin->id],'files'=>true,'class' => 'form-material']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}

            </div>
            <div class="form-group">
                {!! Form::label('password', 'New Password:') !!}
                {{ Form::password('password', array('class'=>'form-control' ) ) }}

            </div>


            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class'=>'form-control'])!!}
            </div>

     


            <div class="form-group">
                {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}


        </div>
        @include('include/form_error')
    </div>


    </div>




 @stop