@extends('admin.master')

@section('content')



<div class="page-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Companies</h4>
                <h6 class="card-subtitle">View All Companies</h6>
         
                <div class="table-responsive m-t-40">
                        <table class="table table-bordered table-striped" id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                        <tr>
                            <th WIDTH="70">ID</th>
                            <th WIDTH="250">Name</th>
                            <th WIDTH="250">Email</th>
                            <th WIDTH="70">Phone</th>
                            <th WIDTH="70">Address</th>
                            <th WIDTH="70">Actions</th>
    
                        </tr>
                        </thead>
                        <tbody>
    
                        @if($companies)
    
                        @foreach($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->tel}}</td>
                            <td>{{$company->address}}</td>
                            <td>
    
                                <button  class="btn btn-group-sm btn-link"><a href="{{route('admin.companies.edit', $company->id)}}"><i class="fa fa-edit waves-effect"></i>  </button>
    
                                {!! Form::open(['method'=>'DELETE', 'action'=> ['CompaniesController@destroy', $company->id],'onsubmit' => 'return ConfirmDelete()']) !!}
                                {{ Form::button('<i class="mdi mdi-delete waves-effect"></i>', ['type' => 'submit', 'class' => 'btn btn-group-sm btn-link'] )  }}
                                {!! Form::close() !!}
    
                            </td>
                        </tr>
                        @endforeach
    
    
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('include/datatable')
        @include('include/Toastr')

        </div>
       

        <script>
            function ConfirmDelete(){
                return confirm('Are you sure you ? THIS CANNOT BE UNDONE');
            }
        </script>
        @stop
    