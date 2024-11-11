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
                        <li class="active">Customer</li>
                    </ol>
                </div>
            </div>
            <!-- Page-Title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tack Attendence</h3>
                            @if(Session::has('status'))
                            <p class="alert alert-success">{{Session::get('status')}}</p>
                        @endif
                        </div>
                        <h3 class="text-success">{{ date("d/m/y") }}</h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table  {{--id="datatable"--}} class="table table-striped table-bordered">
                                        <thead> 
                                            <tr>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Attendence</th>
                                              </tr>
                                        </thead>

                                 
                                        <tbody>
                                <form method="POST" action="{{ route('insert.attendence') }}">
                                                @csrf
                                           @foreach ($employee as $row)
                                           <tr>
                                            <td>{{ $row->name }}</td>
                                            <td><img src="{{asset('uploads/employees')}}/{{$row->photo}}" style="width: 60px; height:60px;" alt="" class="image"></td>
                                            <input type="hidden" name="user_id[]" value="{{ $row->id }}">
                                            <td>

                                                <input type="radio" name="attendece[{{ $row->id }}]" value="present">Present
                                                <input type="radio" name="attendece[{{ $row->id }}]" value="absence">Absence

                                                <input type="hidden" name="att_date" value="{{ date('d/m/y') }}">
                                                <input type="hidden" name="att_year" value="{{ date('Y') }}">
                                                {{-- <a href="#" class="btn ntn-sm btn-info">Edit</a>
                                                 --}}
                                                     {{-- <div class="list-icon-function">
                                                        {{-- {{route('admin.product.edit',['id'=>$product->id])}} --}}
                                                        {{-- <a href="#">
                                                            <div class="item edit">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                             </div>
                                                        </a>
                                                        {{-- {{route('admin.product.delete',['id'=>$product->id])}} --}}
                                                        {{-- <form action="#" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="item text-danger delete">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </div>
                                                        </form> --}}
                                                     {{-- </div> --}}
                                                 
                                            </td>
                                           
                                        </tr>
                                           @endforeach
                                           
                                       
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-success">Take Attendence</button>
                                </form>
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
