@extends('layouts.master')
@section('content')
<section class="content">
    @if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
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
                    <form action="{{url('admin/classes/subjects/delete_this/'.$class->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                    
                        <label>Viw Subjects of  {{$class->name}} <b class="text-red">{{$class->groups}}</b></label>
                        <div class="card-body">
                            <div class="row " >
                                  @foreach ($class->subjects as $subject)
                                  
                                    
                                    <div  class="card col-md-3 m-3 border border-danger" style="width: 18rem;" >
                                      
                                      
                                        <div class="card-body">
                                         <h5 class="text-dark">{{$subject->name}}</h5>
                                        </div>
                                      
                                    </div>
                                    <input type="checkbox" name="subject[]" value="{{$subject->id}}">
                                   
                                    
                                  
                                  
                                  @endforeach
                            </div>
                        </div>
                        <div class="row">
                            
                           
                            <div class="offset-11 mt-5">
                                <button class="btn btn-success" type="submit">Delete</button>
                                
                            </div>
                            
                            
                        </div>
                      
                    </form>
                       
                    
                </div>
            </div>
    </div>
 </section>           
 @endsection           