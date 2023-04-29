

<div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-sub-header">
          <h3 class="page-title">Users</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="students.html">Users</a>
            </li>
            <li class="breadcrumb-item active">All Users</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card card-table comman-shadow">
        <div class="card-body pb-0">
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="page-title">Users</h3>
              </div>
              <div class="col-auto text-end float-end ms-auto download-grp">
                <a id="simple_view" class="btn btn-outline-gray me-2">
                  <i class="feather-list"></i>
                </a>
                <a href="students-grid.html" class="btn btn-outline-gray me-2 active">
                  <i class="feather-grid "></i>
                </a>
              </div>
            </div>
          </div>
          <div class="student-pro-list">
            <div class="row">

        @if($users!=null && $users!='')
            @foreach ($users as $user)
                    
               
              <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                <div class="card">
                  <div class="card-body">
                    <div class="student-box flex-fill">
                      <div class="student-img">
                        <a href="student-details.html">
                            @php
                                // $user_21=User::find(21);
                                // $images_21=$user->images()->where('user_id',21);
                                if(isset($user['images'])){
                                    $images=collect($user['images']);
                                // dd($images->first()['img']);
                                $image= optional($images->first())['img'];
                                }
                               
                                // dd($image);
                            @endphp
                    <img class="img-fluid" alt="Students Info" style="height: 150px;width:200px" src="{{ asset('uploads/users/' . optional(['img' => $image])['img']) }}">
                        </a>
                      </div>
                      <div class="student-content pb-0">
                        <h5>
                          <a href="student-details.html">{{$user['name']}}</a>
                        </h5>
                        <h6>
                            @if ($user['role']=='1')
                            <p class="font-weight-bold">Admin</p>
                        @elseif($user['role']=='0')
                            <p>User</p>
                        @elseif($user['role']=='2')
                        <p>Student</p>
                        @elseif($user['role']=='4')
                        <p>Parents</p>
                        @elseif($user['role']=='3')
                        <p>Teacher</p>
                  @endif
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

        @endif

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


