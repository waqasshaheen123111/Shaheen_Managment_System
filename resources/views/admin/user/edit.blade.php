@extends('layouts.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User </li>
            <li class="breadcrumb-item active">Edit </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


        <section class="content">
            <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{url('admin/users/'.$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">
                            </div>
                        
                            <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" value="{{$user->email}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" value="{{$user->password}}"  name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                            </div>
                      
                                <div class="form-group col-md-6">
                                    <label for="">Select Role </label>
                                    <select id="select_role" name="role" class="form-control" aria-label="Default select example">
                                        <option value="0" {{$user->role=='0'?'selected':''}}>User</option>
                                        <option value="3" {{$user->role=='3'?'selected':''}}>Teacher</option>
                                        <option value="2" {{$user->role=='2'?'selected':''}}>Student</option>
                                        <option value="4" {{$user->role=='4'?'selected':''}}>Parents</option>
                                        <option value="1" {{$user->role=='1'?'selected':''}}>Admin</option>
                                    </select>
                                </div>
                        </div>       
                          <div class=" check_me card card-primary get_class d-none">

                              
                              <div class="card-header">
                                  <h1 class="card-title">
                                     Select Your Class
                                  </h1>
                              </div>
                          <div  class="card-body">    
                              <div class="row " >
                                      @foreach ($classes as $class)
                                      
                                          
                                          <div  class="card col-md-3 m-3 border border-dark" style="width: 18rem;" >
                                          
                                              
                                              <div class="card-body">
                                              <h5 class="text-dark">{{$class->name.' ('.$class->groups.' )'}}</h5>
                                              </div>
                                          
                                          </div>
                                          <input type="checkbox" name="class" value="{{$class->id}}">
                                          
                                      
                                      
                                      @endforeach
                              </div>
                          </div>
                      </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputFile">Upload Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                        <input name="dp" type="file" class="custom-file-input" id="image" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        @foreach ($user->images as $img)
                                            
                                        <img src="{{asset('uploads/users/'.$img->img)}}" id="preview" class=" rounded img-thumbnail mr-3" height="200" width="150px" alt="img">
                                        @endforeach
                                    </div>
                                </div>
                                

                                
                            </div>
                   
                  <!-- /.card-body -->
                   <div class="row">
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
@push('push-script')
        <script>
          function loadFile(_this,event){
              // alert(_this.attr('id'))
              let id=_this.attr('id').split("_")[1];
              $('#output_'+id).removeClass("d-none");
              var output=document.getElementById('preview_'+id);
              output.src=URL.createObjectURL(event.target.files[0]);
          };
    
          $("#select_role").change(function() {
              var selected_role = $(this).children("option:selected").val();
        
              if (selected_role=='4') {
                 $(".get_students").removeClass("d-none");
              }else{
                  $(".get_students").addClass("d-none");
              }
              if (selected_role=='2') {
                 $(".get_class").removeClass("d-none");
              }else{
                  $(".get_class").addClass("d-none");
              }
             
          });
              
      </script>
@endpush