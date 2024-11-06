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
                        <div class="panel-heading"><h3 class="panel-title">Advance Salary Provide</h3></div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('insert.advance.salary') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Employee</label>
                                    @php
                                        $emp=DB::table('employees')->get();
                                    @endphp
                                    <select name="emp_id" class="form-control">
                                        <option disabled="" selected></option>
                                        @foreach ($emp as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Month</label>
                                    <select name="month" class="form-control">
                                        <option disabled="" selected></option>
                                        <option value="January">January</option>
                                        <option value="February"> February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">advance_salary</label>
                                    <input type="text" name="advance_salary" class="form-control" id="exampleInputPassword1" placeholder="advance_salary">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">year</label>
                                    <select name="year" class="form-control">
                                        <option disabled="" selected></option>
                                        <option value="2000">2000</option>
                                        <option value="20001"> 20001</option>
                                        <option value="20002">20002</option>
                                        <option value="20003">20003</option>
                                        <option value="20004">20004</option>
                                        <option value="20004">20004</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
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
