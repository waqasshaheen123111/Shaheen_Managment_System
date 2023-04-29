@extends('layouts.master')
@section('content')
<div class="container flex-grow-1 light-style container-p-y">
  @if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
  @endif
  @if ($errors->has('name'))
    <div class="alert alert-danger">
        {{ $errors->first('name') }}
    </div>
 @endif


    <div class="container-m-nx container-m-ny bg-lightest mb-3">
        <ol class="breadcrumb text-big container-p-x py-3 m-0">
            <li class="breadcrumb-item">
                <a href="javascript:void(0)">home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0)">projects</a>
            </li>
            <li class="breadcrumb-item active">site</li>
        </ol>

        <hr class="m-0" />

        

        <hr class="m-0" />



        {{-- create Library  --}}

        <div class="card card-primary">
            <div class="card-header">
                  <div class="row">
                    
                      
                      <h3 class="card-title">
                       Add Library
                      </h3>
                    
                  
                  </div>

            </div>
             <form action="{{url('admin/library')}}" method="POST">
                @csrf
             
                <div class="card-body">
                

                
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for=""  class="text-center">Name Library</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
             </form>
        </div>

        {{-- end  --}}
    </div>


</div>
@endsection