@extends('layouts.app')

@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Welcome !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Moltran</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>

            <!-- Start Widget -->
            <div class="row">
                <div class="col-md-2"> </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Add Employee</h3></div>
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">phone</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">address</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">experience</label>
                                    <input type="text" name="experience" class="form-control" id="exampleInputPassword1" placeholder="experience">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">photo</label>
                                    <input type="text" name="photo" class="form-control" id="exampleInputPassword1" placeholder="photo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">nid_no</label>
                                    <input type="text" name="nid_no" class="form-control" id="exampleInputPassword1" placeholder="nid_no">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">salary</label>
                                    <input type="text" name="salary" class="form-control" id="exampleInputPassword1" placeholder="salary">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">vacation</label>
                                    <input type="text" name="vacation" class="form-control" id="exampleInputPassword1" placeholder="vacation">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">city</label>
                                    <input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="city">
                                </div>
                
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                            </form>
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div>

                

            </div> 
            <!-- End row-->

        </div> <!-- container -->
                   
    </div> <!-- content -->


</div>
@endsection
