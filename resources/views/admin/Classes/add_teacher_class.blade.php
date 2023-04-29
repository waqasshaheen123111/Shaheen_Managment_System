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
                    <form action="{{url('admin/teacher_class/'.$class->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label>Select Class Teacher</label>
                        <div class="card-body">
                            <div class="row " >
                                  @foreach ($teachers as $teacher)
                                  
                                    
                                    <div  class="card col-md-3 m-3 border border-danger" style="width: 18rem;" >
                                      
                                      <img class="card-img-top" id="{{$teacher->id}}" src="{{asset('uploads/users/'.$teacher->user->images->first()->img)}}" height="200px" width="150px" alt="Card image cap" onclick="loadfile($(this))" >
                                        <div class="card-body">
                                         <h5 class="text-dark">{{$teacher->user->name}}</h5>
                                        </div>
                                      
                                    </div>
                                   
                                    <input type="checkbox" name="teachers[]" value="{{$teacher->id}}">
                                  
                                  
                                  @endforeach
                            </div>
                        </div>
                        <div class="row">
                            
                            <input type="text"  id="teacher_id" value="">
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
