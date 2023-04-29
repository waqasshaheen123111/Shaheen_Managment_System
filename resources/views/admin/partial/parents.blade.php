{{-- @foreach ($parents as $parent)
                                    
                                        
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('uploads/users/'.$parent->user->images->first()->img)}}" height="150px" width="150px" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$parent->user->name}}</h5>
        
    </div>
    </div>
    <input type="checkbox" name="parent" value="{{$parent->id}}">
@endforeach --}}

@foreach ($parents as $parent)
                                  
                             
<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
  <div class="card">
    <div class="card-body">
      <div class="student-box flex-fill">
        <div class="student-img">
          
            
      <img class="img-fluid" alt="Students Info" style="height: 150px;width:200px" src="{{asset('uploads/users/'.$parent->user->images->first()->img)}}">
         
        </div>
        <div class="student-content pb-0">
          <h5>
            <label class="file-upload image-upbtn mb-0">
                {{-- {{dd($parent->user->images->first()->img);}} --}}
               
                {{$parent->user->name}}
            </label>
            <input type="checkbox" name="parent" value="{{$parent->id}}">
          </h5>
         
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach