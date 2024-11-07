@extends('layouts.app')

@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Welcome !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Moltran</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- Page-Title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Pay Salaly <span class="pull-right text-danger">{{ Date('F Y') }}</span></h3>
                            </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>photo</th>
                                                <th>Salary</th>
                                                <th>Month</th>
                                                
                                                <th>action</th>
                                                
                                            </tr>
                                        </thead>

                                 
                                        <tbody>
                                           @foreach ($employees as $row)
                                           <tr>
                                            <td>{{ $row->name }}</td>
                                            <td><img src="{{asset('uploads/employees')}}/{{$row->photo}}" alt="" class="image"></td>
                                            <td>{{ $row->salary }}</td>
                                            <td><span class="badge badge-success">
                                                {{ date("F", strtotime('-1 month')) }}</span></td>
                                            <td>
                                                
                                                     <div>
                                                        {{-- {{route('admin.product.edit',['id'=>$product->id])}} --}}
                                                        <a class="btn btn-sm btn-primary" href="#">
                                                           Pay Salary
                                                        </a>
                                                        
                                                     </div>
                                                
                                            </td>
                                           
                                        </tr>
                                           @endforeach
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Widget -->
            <div class="row">
                

                

            </div> 
            <!-- End row-->

        </div> <!-- container -->
                   
    </div> <!-- content -->


</div>
  
@endsection
