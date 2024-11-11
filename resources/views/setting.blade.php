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
                        <div class="panel-heading"><h3 class="panel-title">Add Setting</h3></div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('insert.setting') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">company_name</label>
                                    <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" placeholder="company_name">
                                </div>
                         
                                <div class="form-group">
                                    <label for="exampleInputPassword1">company_address</label>
                                    <input type="text" name="company_address" class="form-control" id="exampleInputPassword1" placeholder="company_address">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">company_email</label>
                                    <input type="email" name="company_email" class="form-control" id="exampleInputPassword1" placeholder="company_email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">company_phone</label>
                                    <input type="text" name="company_phone" class="form-control" id="exampleInputPassword1" placeholder="company_phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">company_mobile</label>
                                    <input type="text" name="company_mobile" class="form-control" id="exampleInputPassword1" placeholder="company_mobile">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">company_city</label>
                                    <input type="text" name="company_city" class="form-control" id="exampleInputPassword1" placeholder="company_city">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">company_country</label>
                                    <input type="text" name="company_country" class="form-control" id="exampleInputPassword1" placeholder="company_country">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">company_zipcode</label>
                                    <input type="text" name="company_zipcode" class="form-control" id="exampleInputPassword1" placeholder="company_zipcode">
                                </div>

                                <fieldset>
                                    <div class="body-title">Company Logo <span class="tf-color-1">*</span></div>
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
                                                <input type="file" id="myFile" name="company_logo" accept="image/*">
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
