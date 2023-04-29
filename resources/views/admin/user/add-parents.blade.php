@extends('layouts.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Parents's </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Students </li>
            <li class="breadcrumb-item active">Student Detail </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


        <section class="content">
           <div>
            <h1 class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new parents</h1>
           </div>
           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">add parents</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="form2">
                    <div class="row">
                        <div class="col-md-6">
                           <label for="">Name</label>
                           <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-6">
                           <label for="">Email</label>
                           <input type="email" name="email" class="form-control">
                        </div>
                      </div>
                    <div class="row">
                        <div class="col-md-6">
                           <label for="">Password</label>
                           <input type="password" name="password" class="form-control">
                        </div>
                       
                     </div>
                     
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button  class="btn btn-primary" onclick="parent($(this))">Save changes</button>
                  
                </div>
              </div>
            </div>
          </div>
          
        </section>
    
  
@endsection
@push('push-script')
<script>
     function parent(_this) {
            event.preventDefault();
            var form = $("#form2");
           var formdata = form.serialize();
        
            // return 0;
            $.ajax({
                type: "post",
                url:  "{{url('admin/users/parents')}}",
                data:formdata,
                success: function(msg) {
                    alert(msg);
                }
            });
        }

                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

</script>
@endpush