@extends('layouts.master')
@section('content')
<main>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h1>Movies</h1>
                </div>
            </div>
            <div class="card-body">
                <h1 class="col-12">LAtest Movies</h1>
                <div class="col-12">
                   <form action="">
                        <div class="col-4">
                            <label for="">Movie Name</label>
                                <input type="text" name="name" class="form-control">
                            
                        </div>
                        <div class="col-4">
                            <label for="">Movie Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-4">
                            <label for="">Movie Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="col-12">
                            <input type="submit" class="fom-control" >
                        </div>
                        
                   </form>
                </div>
                
            </div>
        </div>
    </div>
</main>
@endpush