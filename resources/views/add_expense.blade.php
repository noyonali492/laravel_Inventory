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
                        <div class="panel-heading"><h3 class="panel-title">Add expense</h3></div>
                        {{ date("F") }}
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('insert.expense') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">details</label>
                                    <textarea rows="4" class="form-control" name="details"></textarea>
                                   </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">amount</label>
                                    <input type="text" name="amount" class="form-control" id="exampleInputEmail1" placeholder="amount">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">month</label>
                                    <input type="text" value="{{ date('d/m/y') }}" name="month" class="form-control" id="exampleInputEmail1" placeholder="month">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">date</label>
                                    <input type="text" name="date" class="form-control" value="{{ date("F") }}" id="exampleInputEmail1" placeholder="date">
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