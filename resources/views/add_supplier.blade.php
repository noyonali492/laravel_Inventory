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
                        <div class="panel-heading"><h3 class="panel-title">Add Supplier</h3></div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('insert.supplier') }}" enctype="multipart/form-data">
                                @csrf
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
                                    <label for="exampleInputPassword1">shop</label>
                                    <input type="text" name="shop" class="form-control" id="exampleInputPassword1" placeholder="shop">
                                </div>
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">account_holder</label>
                                    <input type="text" name="accountholder" class="form-control" id="exampleInputPassword1" placeholder="accountholder">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">account_number</label>
                                    <input type="text" name="accountnumber" class="form-control" id="exampleInputPassword1" placeholder="account_number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">bank_Name</label>
                                    <input type="text" name="bankname" class="form-control" id="exampleInputPassword1" placeholder="bankname">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">branch name</label>
                                    <input type="text" name="branchname" class="form-control" id="exampleInputPassword1" placeholder="branchname">
                                </div>
                              

                                <div class="form-group">
                                    <label for="exampleInputPassword1">city</label>
                                    <input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="city">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">type</label>
                                    <select name="type" class="form-control">
                                        <option value="1">Distributor</option>
                                        <option value="2">Whole Seller</option>
                                        <option value="3">Brochure</option>
                                    </select>
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
                                                <input type="file" id="myFile" name="image" accept="image/*">
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
{{-- 
<script type="text/javascript">
    function readURL(input){
        if(input.file && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#image')
                    .attr('src',e.target.result)
                    .width(80)
                    .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }


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

</script> --}}

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
