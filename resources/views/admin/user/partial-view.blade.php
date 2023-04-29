@extends('layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="card-header">
                <h1 class="card-title">
                   Select Your Parent
                </h1>
            </div>
        <div  class="card-body">    
            <div >
                    @foreach ($parents as $parent)
                    
                        
                        <div  class="card col-md-3 m-3 border border-danger" style="width: 18rem;" >
                        
                        <img class="card-img-top" id="{{$parent->id}}" src="{{asset('uploads/users/'.$parent->user->images->first()->img)}}" height="200px" width="150px" alt="Card image cap" onclick="loadfile($(this))" >
                            <div class="card-body">
                            <h5 class="text-dark">{{$parent->user->name}}</h5>
                            </div>
                        
                        </div>
                        <input type="checkbox" name="parent" value="{{$parent->id}}">
                        
                    
                    
                    @endforeach
                 
            </div>
        </div>
        </div>
            
      </div>
    </div>
      </div>
        <!-- Main row -->
    </section>
    <!-- /.content -->
@endsection