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
        <h1 class="m-0">View Students</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Students </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary ">
                <div class="card-header ">
                        <h1 class="card-title">
                            View Students
                            
                        </h1>
                </div>




                                  
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped" style="width:100%">
                          <thead>
                              <tr>
                                <th> ID</th>
                                <th>User_id</th>
                                <th>Name</th>
                                <th>Parent Name</th>
                                <th>Profile Pic</th>
                                <th>Status</th>
                                <th>Show</th>
                              </tr>
                          </thead>
                          <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->user_id}}</td>
                                <td>{{$student->user->name}}</td>
                                <td></td>
                                <td><img src="{{asset('uploads/users/'.$student->user->images->first()->img)}}" height="200px" width="150px" alt="img"></td>
                                <td>
                                    @if ($student->status=='1')
                                    <p class="text-bold text-success"> Active</p>
                                    @else
                                       <p class="text-bold text-danger">Non Active</p>
                                    @endif
                                </td>
                                <td class="d-flex justify-content-center align-items-cent"><a href="{{url('admin/students/'.$student->id.'/edit')}}" class="text-decoration-none"><i class="fa-solid fa-eye text-dark"></i></a></td>
                            </tr>
                        @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                <th> ID</th>
                                <th>User_id</th>
                                <th>Name</th>
                                <th>Parent Name</th>
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