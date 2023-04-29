@extends('layouts.master')
@section('content')
<main>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h1>Random Form</h1>
                </div>
                <div class="card-body row">
                    <form action="{{url('/form_submit1')}}">
                        <div class="col-4"><input name="name" type="text"></div>
                        <div class="col-4"><input name="email" type="text"></div>
                        <div class="col-4"><input name=password type="text"></div>
                        <div class="col-12"><input type="text" name="country"></div>
                        <input type="submit" class=" offset-7 col-3" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection