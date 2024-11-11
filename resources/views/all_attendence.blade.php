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
                            <h3 class="panel-title">All Attendence</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Category Name</th>
                                                
                                                <th>action</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                               $sl=1; 
                                            @endphp
                                           @foreach ($all_att as $row)
                                           <tr>
                                            <td>{{ $sl++ }}</td>
                                            <td>{{ $row->edit_date }}</td>
                                            <td>
                                                
                                                     <div class="list-icon-function">
                                                        {{-- {{route('admin.product.edit',['id'=>$product->id])}} --}}
                                                        <a href="#">
                                                            <div class="item edit">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                             </div>
                                                        </a>
                                                        {{-- {{route('admin.product.delete',['id'=>$product->id])}} --}}
                                                        <form action="#" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="item text-danger delete">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </div>
                                                        </form>
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