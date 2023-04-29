@extends('layouts.master')
@section('content')
@php
    $users_1=$users;
    // dd($users_1);
@endphp
<div class="default_row">



<div class="page-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="page-sub-header">
        <h3 class="page-title">Users</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="students.html">Users</a>
          </li>
          <li class="breadcrumb-item active">Users List</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="student-group-form">
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search by ID ...">
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search by Name ...">
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search by Phone ...">
      </div>
    </div>
    <div class="col-lg-2">
      <div class="search-student-btn">
        <button type="btn" class="btn btn-primary">Search</button>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table comman-shadow">
      <div class="card-body">
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="page-title">Users</h3>
            </div>
            <div class="col-auto text-end float-end ms-auto download-grp">
              <a href="students.html" class="btn btn-outline-gray me-2 active">
                <i class="feather-list"></i>
              </a>
              <a  id="grid_view" class="btn btn-outline-gray me-2">
                <i class="feather-grid"></i>
              </a>
              <a href="#" class="btn btn-outline-primary me-2">
                <i class="fas fa-download"></i> Download </a>
              <a href="{{url('admin/users/create')}}" class="btn btn-primary">
                <i class="fas fa-plus"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
            <thead class="student-thread">
              <tr>
                <th>
                  <div class="form-check check-tables">
                    <input class="form-check-input" type="checkbox" value="something">
                  </div>
                </th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                
                <th class="text-end">Action</th>
              </tr>
            </thead>
            <tbody>
              @if($users!=null && $users!='')
              @foreach ($users as $user)
              
                <tr>
                  <td>
                    <div class="form-check check-tables">
                      <input class="form-check-input" type="checkbox" value="something">
                    </div>
                  </td>
                  <td>{{$user->id}}</td>
                  <td>
                    <h2 class="table-avatar">
                      <a href="student-details.html" class="avatar avatar-sm me-2">
                        <img class="avatar-img rounded-circle" src="{{asset('uploads/users/'.optional($user->images->first())->img)}}" alt="User Image">
                      </a>
                      <a href="student-details.html">{{$user->name}}</a>
                    </h2>
                  </td>
                  <td>{{$user->email}}</td>
                 
                  <td>
                    @if ($user->role=='1')
                              <p class="font-weight-bold">Admin</p>
                          @elseif($user->role=='0')
                              <p>User</p>
                          @elseif($user->role=='2')
                          <p>Student</p>
                          @elseif($user->role=='4')
                          <p>Parents</p>
                          @elseif($user->role=='3')
                          <p>Teacher</p>
                    @endif

                  </td>
                
                  <td class="text-end">
                    <div class="actions ">
                      <a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
                        <i class="feather-eye"></i>
                      </a>
                      <a href="{{url('admin/users/'.$user->id.'/edit')}}" class="btn btn-sm bg-danger-light">
                        <i class="feather-edit"></i>
                      </a>
                      <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                        @csrf
                    
                        @method('DELETE')
                        <button type="submit" class="btn feather-trash"></button>
                        
                    
                      </form>
                    </div>
                  </td>
                </tr>

                @endforeach
              @endif

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="dynamic_row">

</div>
@endsection


@push('push-script')

<script>

  $(document).ready(function () {
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $('#grid_view').click(function(){
        var users =  {!! json_encode($users_1) !!};
          // console.log(users);

          $.ajax({
            type: "post",
            url: "{{url('admin/user/grid_view')}}",
            data: {users:users},
            
            success: function (res) {
              
              console.log(res.html);
              // alert('fist function is running');
              $('.default_row').hide();
              $('.dynamic_row').html(res.html);
              $('.dynamic_row').show();


              $('#simple_view').click(function(){
                  // alert('second function is running');
                  $('.default_row').show();
                $('.dynamic_row').hide();
          
              });
            }
          });
        });


        
  });
</script>
@endpush