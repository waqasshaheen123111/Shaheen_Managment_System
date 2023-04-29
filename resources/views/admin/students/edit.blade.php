@extends('layouts.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Student's Detail</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Students </li>
            <li class="breadcrumb-item active">Student Detail </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


        <section class="content">
            <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Student's Detail</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{url('admin/students/'.$student->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" value="{{$student->user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">
                            </div>
                        
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" value="{{$student->user->email}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Contact</label>
                                <input type="text"
                                @if ($student->contact)
                                 value="{{$student->contact}}" 
                                 @endif
                                 
                                 name="contact"  class="form-control" placeholder="Enter Your Contact">
                            </div>
                        
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Qualification</label>
                                <input type="text"
                                 @if ($student->qualification)
                                 value="{{$student->qualification}}" 
                                 @endif
                              
                                  name="qualification" class="form-control"  placeholder="Enter Your Qualification">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for=""> Status</label>
                               @if ($student->status=='1')
                               <input type="checkbox" name="status" checked>
                               @endif
                               @if ($student->status=='0')
                               <input type="checkbox" name="status">
                               @endif
                             
                            </div>
                        </div>
                      
                     </div>


                    
                  <!-- /.card-body -->
                   <div class="row p-4">
                         <div class=" offset-11">
                               <button type="submit" class="btn btn-primary">Update</button>
                         </div>
                    </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
        </section>
    
  
@endsection