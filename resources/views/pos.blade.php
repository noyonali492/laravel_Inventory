@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12 bg-info">
                    <h4 class="pull-left text-white page-title">POS Point of Sale !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#" class="text-white">Echovel</a></li>
                        <li class="text-white">{{ date('d/m/y') }}</li>
                    </ol>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="portfolioFilter">
                        @foreach ($categories as $row )
                            <a href="#" data-filter="*" class="current">{{ $row->cat_name }}</a> 
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <br>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel">
                            <h4 class="text-info"> Customer
                                <a href="#" class="btn btn-sm btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal">Add New</a>
                            </h4>
                            <select class="form-control">
                                <option disabled selected> Select customer</option>
                                @foreach ($customers as $row)
                                    
                                <option>{{ $row->name }}</option>
                                
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th> Name</th>
                                    <th>Category</th>
                                    <th>Product Code</th>
                                    <th>action</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                               @foreach ($products as $row)
                               <tr>
                                <td>
                                    <a href="#" style="font-size: 20px"><i class="fas fa-plus-square"></i></a>
                                    <img width="60px" height="60px" src="{{asset('uploads/products')}}/{{$row->product_image}}" alt="" class="image">
                                
                                </td>
                                <td>{{ $row->product_name }}</td>
                                <td>{{ $row->cat_name }}</td>
                                <td>{{ $row->product_code }}</td>
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



        </div> <!-- container -->
                   
    </div> <!-- content -->
</div>

<!-- customer add modal-->
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Add a New Customer</h4> 
            </div> 
            <div class="modal-body"> 
               <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Name</label> 
                            <input type="text" class="form-control" id="field-4" name="name"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Email</label> 
                            <input type="text" class="form-control" id="field-5" name="email"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Phone</label> 
                            <input type="text" class="form-control" id="field-6" name="phone"> 
                        </div> 
                    </div> 
                </div> 

                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Address</label> 
                            <input type="text" class="form-control" id="field-4" name="address"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">ShopName</label> 
                            <input type="text" class="form-control" id="field-5" name="shopename"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Account Holder</label> 
                            <input type="text" class="form-control" id="field-6" name="account_holder"> 
                        </div> 
                    </div> 
                </div> 

                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Account Number</label> 
                            <input type="text" class="form-control" id="field-4" name="account_number"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Bank Name</label> 
                            <input type="text" class="form-control" id="field-5" name="bank_branch"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">city</label> 
                            <input type="text" class="form-control" id="field-6" name="city"> 
                        </div> 
                    </div> 
                </div> 

                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">n</label> 
                            <input type="text" class="form-control" id="field-4" placeholder="Name"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">n</label> 
                            <input type="text" class="form-control" id="field-5" placeholder="Email"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Photo</label> 
                            <input type="file" class="form-control" id="field-6" placeholder="123456"> 
                        </div> 
                    </div> 
                </div> 
              
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
            </div> 
        </div> 
    </div>
</div>
</form>
@endsection
