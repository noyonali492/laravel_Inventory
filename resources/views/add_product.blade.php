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
                        <div class="panel-heading"><h3 class="panel-title">Add Product</h3></div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('insert.product') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="product Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category</label>
                                   
                                    <select name="cat_id" class="form-control">
                                        <option disabled="" selected></option>
                                        @foreach ( $categorys as $row )
                                            
                                        <option value="{{ $row->id }}">{{ $row->cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Supplier</label>
                                  
                                    <select name="sup_id" class="form-control">
                                        <option disabled="" selected></option>
                                        @foreach ( $suppliers as $row )
                                            
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">product_code</label>
                                    <input type="text" name="product_code" class="form-control" id="exampleInputPassword1" placeholder="product_code">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">product_garage</label>
                                    <input type="text" name="product_garage" class="form-control" id="exampleInputPassword1" placeholder="product_garage">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">product_route</label>
                                    <input type="text" name="product_route" class="form-control" id="exampleInputPassword1" placeholder="product_route">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">buy_date</label>
                                    <input type="date" name="buy_date" class="form-control" id="exampleInputPassword1" placeholder="buy_date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">expire_date</label>
                                    <input type="date" name="expire_date" class="form-control" id="exampleInputPassword1" placeholder="expire_date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">buying_price</label>
                                    <input type="text" name="buying_price" class="form-control" id="exampleInputPassword1" placeholder="buying_price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">selling_price</label>
                                    <input type="text" name="selling_price" class="form-control" id="exampleInputPassword1" placeholder="selling_price">
                                </div>

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
                                                <input type="file" id="myFile" name="product_image" accept="image/*">
                                            </label>
                                        </div>
                                    </div>                    
                                </fieldset> 
                
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
