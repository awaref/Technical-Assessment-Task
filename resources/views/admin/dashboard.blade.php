@extends('admin.master')

@section('content')



    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">

            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-8"><h2>{{$employees}}</h2>
                                    <h6>Total Employees</h6></div>
                                <div class="col-4 align-self-center text-right  p-l-0">
                                    <div id="sparklinedash3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                 <!-- Column -->
                 <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><h2>{{$companies}} </h2>
                                        <h6>Total Companies</h6></div>
                                    <div class="col-4 align-self-center text-right  p-l-0">
                                        <div id="sparklinedash3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->

            
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h4 class="card-title">Recent Login (static) </h4>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Login</h6> </li>
                                        <li>
                                            <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Days</h6> </li>

                                    </ul>
                                </div>
                            </div>
                            <div id="morris-area-chart2" style="height: 405px;"></div>

                        </div>
                    </div>
                   
                </div>
              
            </div>
            <!-- Row -->

            <!-- ============================================================== -->
            <!-- End PAge Content -->
      
        </div>
    </div>
      
    

@stop