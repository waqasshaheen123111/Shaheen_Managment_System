@extends('layouts.master')
@section('content')
<div class="content-header">
  @if (session('message'))
  <div class="alert alert-success" role="alert">
      {{ session('message') }}
  </div>
@endif
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">View Teacher</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Teacher </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
                <div class="card-header">
                        <h1 class="card-title">
                        View Teachers
                        </h1>
                </div>




                                  
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped" style="width:100%">
                          <thead>
                              <tr>
                                <th> ID</th>
                                <th>User_id</th>
                                <th>Name</th>
                                <th>Profile Pic</th>
                                <th>Status</th>
                                <th>Show</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($teachers as $teacher)
                            
                              
                               <tr>
                                   <td>{{$teacher->id}}</td>
                                   <td>{{$teacher->user->id}}</td>
                                   <td>{{$teacher->user->name}}</td>
                                   <td><img src="{{asset('uploads/users/'.$teacher->user->images->first()->img)}}" height="200px" width="150px" alt="img"></td>
                                   <td>
                                     @if ($teacher->status=='1')
                                     <p class="text-bold text-success"> Active</p>
                                     @else
                                        <p class="text-bold text-danger">Non Active</p>
                                     @endif
                                   </td>
                                   <td class="d-flex justify-content-center align-items-cent"><a href="{{url('admin/teachers/'.$teacher->id.'/edit')}}" class="text-decoration-none"><i class="fa-solid fa-eye text-dark"></i></a></td>
                                  
                               </tr>
                               
                            @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                <th> ID</th>
                                <th>User_id</th>
                                <th>Name</th>
                                <th>Profile Pic</th>
                                <th>Status</th>
                                <th>Show</th>
                              </tr>
                          </tfoot>
                        </table>
          
                      </div> 
                       
        </div>
      </div>
    </div>
  </div>
</section>





@endsection