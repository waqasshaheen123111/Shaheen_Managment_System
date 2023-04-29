@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid py-4">
        
        
            <div class="card card-primary  mt-4">
                <div class="card-header">
                    <h4 > Add Class</h6>

                </div>

                <div class="card-body">
                    @if ($errors->any())  
                    <div class="alert alert-danger">
                        
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                        
                    @endif
                    <form action="{{url('admin/classes')}}" method="POST">
                        @csrf
                        <label>Select Class Teacher</label>
                        <div class="card-body">
                            <div class="row " >
                                  @foreach ($teachers as $teacher)
                                  
                                    
                                    <div  class="card col-md-3 m-3 border border-danger "   style="width: 18rem;">
                                      
                                      <img class="card-img-top"  id="{{$teacher->id}}" src="{{asset('uploads/users/'.$teacher->user->images->first()->img)}}" height="200px" width="150px" alt="Card image cap" onclick="loadfile($(this))" >
                                        <div class="card-body">
                                         <h5 class="text-dark">{{$teacher->user->name}}</h5>
                                        </div>
                                      
                                    </div>
                                  
                                  
                                  @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class=" form-group col-md-12">
                            <label for="">Enter Class Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Class Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Select Group </label>
                                <select name="group" class="form-control" aria-label="Default select example">
                                    <option >Computer Science</option>
                                    <option >Bio</option>
                                    <option >Arts</option>
                                    
                                </select>
                            </div>
                            <input type="text" name="teacher_id" id="teacher_id" value="">
                            <div class="offset-11 mt-5">
                                <button class="btn btn-success" type="submit">Add</button>
                            </div>
                            
                        </div>
                        
                       
                    </form>
                </div>
            </div>

       
    </div>
</section>
@endsection
@push('push-script')
    <script>
          function loadfile(_this){
            _this.parent().attr('id','style-img')
            
            alert(_this.attr('id'))
            var id=_this.attr('id');
            alert(id)
          
            $("#teacher_id").val(id)
            alert($("#teacher_id").val()) 
           
        }
        
        alert('Hello')
    </script>
@endpush