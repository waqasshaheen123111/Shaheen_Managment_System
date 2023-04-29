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
                   
                        <label>Class {{$class->name}} Teachers</label>
                        <div class="card-body">
                            <div class="row " >
                             
                                {{-- {{dd($class->teachers->count())}} --}}
                            @if ($class->teachers->count()>0)
                                
                            
                                    @foreach ($class->teachers as $teacher)
                                    
                                    
                                    <div  class="card col-md-3 m-3 border border-danger" style="width: 18rem;" >
                                        
                                        <img class="card-img-top" id="{{$teacher->id}}" src="{{asset('uploads/users/'.$teacher->user->images->first()->img)}}" height="200px" width="150px" alt="Card image cap" onclick="loadfile($(this))" >
                                        <div class="card-body">
                                            <h5 class="text-dark">{{$teacher->user->name}}</h5>
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    @endforeach
                            @else       
                            <div  class="card col-md-3 m-3 " style="width: 18rem;" >
                                        
                        
                                <div class="card-body">
                                    <h5 class="text-dark text-bold">No record available</h5>
                                </div>
                                
                            </div>     
                            @endif


                            </div>
                        </div>
                        
                        
                       
                    
                </div>
            </div>

       
    </div>
</section>
@endsection

