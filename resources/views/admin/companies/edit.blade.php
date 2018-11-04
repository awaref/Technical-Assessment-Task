
@extends('admin.master')

@section('content')
<div class="page-wrapper">

        <div class="card">
                <div class="card-body">
                        <h4 class="card-title">Companies</h4>
                        <h6 class="card-subtitle">Edit Company</h6>
            
            
            
            
                        {!! Form::model($company, ['method'=>'PATCH', 'action'=> ['CompaniesController@update', $company->id],'files'=>true,'class' => 'form-material']) !!}
            
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
                                    {!! Form::label('address', 'Address:') !!}
                                    {!! Form::text('address', null, [
                                             'class' => 'form-control',
                                             'required' => 'required',
                                     ])!!}
                                </div>
        
                
        
                            <div class="form-group">
                                {!! Form::label('tel', 'Phone:') !!}
                                {!! Form::text('tel', null, [
                                         'class' => 'form-control',
                                         'required' => 'required',
                                 ])!!}
                            </div>
                          
        
        
                        
        
                            <div class="form-group">
                                {!! Form::submit('Update Company', ['class'=>'btn btn-primary']) !!}
                            </div>
            
                        {!! Form::close() !!}
            
            
                    </div>
            </div>

        @include('include/form_error')
            </div>
@stop