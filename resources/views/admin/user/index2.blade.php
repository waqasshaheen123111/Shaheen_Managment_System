

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


          {{-- @foreach ($users as $user)
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
              <div class="card">
                <div class="card-body">
                  @php
                    $images = optional($user['images']);
                    dd($images);
                    if ($images) {
                      $path = str_replace('public/', '', $images->first()['path']);
                      $img = $images->first()['img'];
                      // Do something with $path and $img here
                    }
                  @endphp
                </div>
              </div>
            </div>
          @endforeach --}}












        @if($users!=null && $users!='')

              {{-- @php
                  $user_get2=collect($users)->where('id','2')->first();
                  // dd($user_get2['images']);
              @endphp
              {{dd($users)}} --}}

             


                {{-- {{dd($users[2]optional(['images'][0]['path']))}} --}}
            @foreach ($users as $user)
                    
               
              <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                <div class="card">
                  <div class="card-body">

                    @php
                      if(isset($user['images'])){
                        $images=$user['images'];
                        $path= str_replace('public/', '',optional($images[0])['path']);
                    $img=optional($images[0])['img'];
                    // dd($path);
                      }else{
                        $path=0;
                        $img=0;
                      }
                  
                    
                        
                    @endphp
                    
                    <div class="student-box flex-fill">
                      <div class="student-img">
                        <a href="student-details.html">

                         


                           
                    <img class="img-fluid" alt="Students Info" style="height: 150px;width:200px" src="{{ asset('storage/' .$path) }}" alt="{{$img}}">
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

                  {{-- @endif --}}
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


