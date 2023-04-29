@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <h1 >
                 <b class="text-danger"> Class</b>  
                </h1>
            </div>
        </div>
        
        
            <div class="card card-primary  mt-4">
                <div class="card-header">
                    <h4 > 
                        
                    </h4>

                </div>

                <div class="card-body">
                    @if ($errors->any())  
                    <div class="alert alert-danger">
                        
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                        
                    @endif
                    <form action="{{url('admin/subjects')}}" method="POST">
                        @csrf
                       
                        <div class="row append">
                            <div class="col-md-12 d-flex" id="append_1">
                    
                                <div class="col-md-8" >
                                    <div class="form-group col-md-6" >
                                        <label for="exampleInputFile">Subject Name</label>
                                        <div class="input-group">
                                            <div class="">
                                                <input id="imge_1"  name="name[]" type="text" class="form-control image-append"  onchange="loadFile($(this),event)">
                                               
                                            </div>
                                            
                                         
                                        </div>
                                        
                                       
                                    </div>                
                                    
                                </div>
                              
                                <div class="col-md-2" id="add_button_1">
                                    <button id="button-append" class="btn btn-success mt-4">Add</button>
                                </div>
                            </div>
                            
                        </div>
                    
                        <div class="row dynamic_row ">
                    
                        </div>
                       
                        
                        <div class="row p-4">
                            <div class=" offset-11">
                                  <button type="submit" class="btn btn-primary">Add</button>
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
    $("#button-append").click(function() {        
        event.preventDefault()
        var counter= $("#counter").val();
        counter++;
        var clone=$('.append').clone()
        clone.find('[id*="1"]').each(function() {
            this.id= this.id.replace('1',counter);

        });
         clone.find("#output_"+counter).addClass('d-none')
        
        clone.find("#add_button_"+counter).html('<button id="button-append_'+counter+'" class="btn btn-danger mt-4"  onclick="removeRow($(this))">remove</button>')
      var dynamic_row= $('.dynamic_row').append(clone.html());
      $("#counter").val(counter)
       
    });   

    function removeRow(_this){
        event.preventDefault()
        var ab=_this.attr('id');
        // alert(ab);
        // alert(  ab.split('_')[1]);
        
        let id=ab.split('_')[1];
        $("#append_"+id).remove();
    }
</script>
@endpush
