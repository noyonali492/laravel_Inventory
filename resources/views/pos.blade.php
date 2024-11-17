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
                    @if(Session::has('success'))
                    <p class="text-success">{{Session::get('success')}}</p>
                    @elseif(Session::has('error'))
                    <p class="text-danger">{{Session::get('error')}}</p>
                    @endif
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
                    <div class="col-lg-6">
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
                        <div class="price_card text-center">
                           
                            <ul class="price-features" style="border:1px solid grey;">
                                <table class="table">
                                    <thead class="bg-info">
                                        <tr>
                                            <th class="text-white">Name</th>
                                            <th class="text-white">Qty</th>
                                            <th class="text-white">Price</th>
                                            <th class="text-white">Sub Total</th>
                                            <th class="text-white">Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $cartproduct=Cart::content()
                                    @endphp
                                    <tbody>
                                        @foreach ($cartproduct as $cart)
                                        <tr>
                                            
                                            <th>{{ $cart->name }} </th>
                                            <th>
                                                <form>
                                                    <input style="width: 40px" type="number" name="qty" value="{{ $cart->qty }}">
                                                    <button style="margin-top: -3px" type="submit" name="submit" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
                                                </form>
                                            </th>
                                            <th>{{ $cart->price }}</th>
                                            <th>{{ $cart->price*$cart->qty }}</th>
                                            <th><div class="item text-danger delete">
                                                <i class="fa-solid fa-trash"></i>
                                                </div>
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                            </ul>
                            <div class="pricing-header bg-primary">
                                <p style="font-size:19px ">Qty:{{Cart::instance('cart')->qty}}</p>
                                <p style="font-size:19px ">Product:{{Cart::instance('cart')->subtotal()}}</p>
                                <p style="font-size:19px ">Vat {{Cart::instance('cart')->tax()}}</p>
                                <p><h2 class="text-white"></h2> <h1 class="text-white">{{Cart::instance('cart')->subtotal()}}</h1></p>
                               
                                <button class="btn btn-success">Create Invoice</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                                <form role="form" method="POST" action="{{ route('add.cart') }}" enctype="multipart/form-data">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $row->id }}">
                                        <input type="hidden" name="name" value="{{ $row->product_name }}">
                                        <input type="hidden" name="qty" value="1">
                                        <input type="hidden" name="price" value="{{ $row->selling_price }}">

                                        <td>
                                            {{-- <a href="#" style="font-size: 20px"><i class="fas fa-plus-square"></i></a> --}}
                                            <img width="60px" height="60px" src="{{asset('uploads/products')}}/{{$row->product_image}}" alt="" class="image">
                                        
                                        </td>
                                        <td>{{ $row->product_name }}</td>
                                        <td>{{ $row->cat_name }}</td>
                                        <td>{{ $row->product_code }}</td>
                                        <td>

                                            <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-plus-square"></i></button>
                                        </td>
                              
                                    </form>
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
<form role="form" method="POST" action="{{ route('insert.customer') }}" enctype="multipart/form-data">
    @csrf
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Add a New Customer</h4> 
            </div> 
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
                    
                    <div class="col-md-10"> 
                        <fieldset>
                            <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                            <div class="upload-image flex-grow">
                                <div class="item" id="imgpreview" style="display:none">                            
                                    <img src="upload-1.html" class="effect8" alt="">
                                </div>
                                <div id="upload-file" class="item up-load">
                                    <label class="uploadfile" for="myFile">
                                        <span class="icon">
                                            <i class="icon-upload-cloud"></i>
                                        </span>
                                        <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                        <input type="file" id="myFile" name="image" accept="image/*">
                                    </label>
                                </div>
                            </div>                    
                        </fieldset> 
                    </div> 
                </div> 
              
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-purple waves-effect waves-light">Save Customer</button> 
            </div> 
        </div> 
    </div>
</div>
</form>



<script>
    $(function(){
        $("#myFile").on("change",function(e){
            const photoInp = $("#myFile");                    
            const [file] = this.files;
            if (file) {
                $("#imgpreview img").attr('src',URL.createObjectURL(file));
                $("#imgpreview").show();                        
            }
        }); 

        $("input[name='name']").on("change",function(){
            $("input[name='slug']").val(StringToSlug($(this).val()));
        });
        
    });
    function StringToSlug(Text) {
        return Text.toLowerCase()
        .replace(/[^\w ]+/g, "")
        .replace(/ +/g, "-");
    }      
</script>
@endsection
