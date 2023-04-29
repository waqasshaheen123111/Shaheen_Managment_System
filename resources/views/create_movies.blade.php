@extends('layouts.master')
@section('content')
<main>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h2>Create Movies</h2>
                </div>
            </div>
            <div class="card-body">
                {{-- <form action="{{url('/create_movie12')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="">Movie Name</label>
                            <input type="text" class="form-control" name="movie_name">
                        </div>
                        <div class="col-6">
                            <label for="">Movie Category</label>
                            <input type="text" class="form-control" name="category">
                        </div>
                        <div class="col-6">
                            <label for="">Movie Actor Name</label>
                            <input type="text" class="form-control" name="actor_name">
                        </div>
                        <div class=" offset-3 col-3">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>



</main>


@endsection