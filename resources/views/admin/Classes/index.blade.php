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
            <h1 class="m-0">View Classes</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Classes </li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
     <div class="container-fluid">
        
            
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="card-tittle col-4">
                        <h4>View Classes
                        {{-- @foreach ($classes as $class)
                          {{dd($class->teachers)
                        
                     
                        }}
                            
                        @endforeach --}}
                        </h4>

                    </div>
                    <div class="offset-5">
                        <a href="{{url('admin/classes/create')}}" class="btn btn-primary text-decoration-none">Add Class</a>
                    </div>
                    <div class="ml-4">
                        <a href="{{url('admin/subjects/create')}}" class="btn btn-primary text-decoration-none">Add Subjects</a>
                    </div>
                    
                </div>
                
            </div>




                            
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th> Class ID</th>
                        <th>Class Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Add Another Teacher</th>
                        <th>Add Subjects to this Class</th>
                        
                        <th>View Subjects of this Class</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $class)
                       
                        <tr>
                           
                                        <td><a href="{{url('admin/classes/get_teachers/'.$class->id)}}">{{$class->id}}</a></td> 
                                        <td>{{$class->name." ( ".$class->groups." ) "}}</td>
                                        
                                        <td><a href="{{url('admin/classes/'.$class->id.'/edit')}}" class="text-decoration-none"><i class="fa-solid fa-pen-to-square text-green"></i></a></td>
                                        <form action="{{ route('classes.destroy', ['class' => $class->id]) }}" method="POST">
                                            @csrf
                                        
                                            @method('DELETE')
                                        <td><button type="submit" class="border-0"><i  class="fa-sharp fa-solid fa-trash text-danger"></i></button></td>
                                        </form>
                                        <td><a href="{{url('admin/teacher_class/'.$class->id.'/edit')}}" class="text-decoration-none"><i class="fa-solid fa-square-plus"></i></a></td>
                                        <td><a href="{{url('admin/subjects/'.$class->id.'/edit')}}" class="text-decoration-none"><i class="fa-solid fa-square-plus"></i></a></td>
                    
                                        <td><a href="{{url('admin/classes/get_subjects/?id='.$class->id)}}" class="text-decoration-none"><i class="fa-solid fa-square-plus"></i></a></td>
                    @endforeach
                            
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th> Class ID</th>
                        <th>Class Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Add Another Teacher</th>
                        <th>Add Subjects to this Class</th>
                       
                        <th>View Subjects of this Class</th>
                    </tr>
                </tfoot>
                </table>

            </div> 
                    
        </div>
    </div>      
                
</section>





@endsection