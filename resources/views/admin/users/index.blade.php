@extends('admin.master')

@section('content')

    <div class="page-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Users</h4>
            <h6 class="card-subtitle">View All Admins</h6>

            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th WIDTH="70">ID</th>
                        <th WIDTH="250">Name</th>
                        <th WIDTH="250">Email</th>
                        <th WIDTH="70">Phone</th>
                        <th WIDTH="70">Actions</th>

                    </tr>
                    </thead>
                    <tbody>

                    @if($admins)

                    @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->phone}}</td>
                        <td>

                            <button  class="btn btn-group-sm btn-link"><a href="{{route('admin.users.edit', $admin->id)}}"><i class="fa fa-edit waves-effect"></i>  </button>

                            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $admin->id],'onsubmit' => 'return ConfirmDelete()']) !!}
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

