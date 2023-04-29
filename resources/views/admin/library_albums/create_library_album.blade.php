@extends('layouts.master')
@section('content')
@php
    
    $library_id=$library_types->id;
@endphp

    <div  id="message" role="alert">
        
    </div>
 

    @php
         $par=0;
    @endphp
<div class="container flex-grow-1 light-style container-p-y default_row" >
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

        <div class="file-manager-actions container-p-x py-2">
            <div>
                <button type="button" class="btn btn-primary mr-2 album_create"  ><i class="ion ion-md-cloud-upload"></i>&nbsp; Create</button>
                
            </div>
            <div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-default icon-btn md-btn-flat active"> <input type="radio" name="file-manager-view" value="file-manager-col-view" checked="" /> <span class="ion ion-md-apps"></span> </label>
                    <label class="btn btn-default icon-btn md-btn-flat"> <input type="radio" name="file-manager-view" value="file-manager-row-view" /> <span class="ion ion-md-menu"></span> </label>
                </div>
            </div>
        </div>

        <hr class="m-0" />
    </div>

    <div class="file-manager-container file-manager-col-view">
        <div class="file-manager-row-header">
            <div class="file-item-name pb-2">Filename</div>
            <div class="file-item-changed pb-2">Changed</div>
        </div>

   
    <div class="row " id="default_row">
        {{-- {{dd($library_albums)}} --}}
        @isset($library_albums)
        
            @foreach ($library_albums as $library_album)
                
            
                
            <div class="file-item">
                <div class="file-item-select-bg bg-primary"></div>
                <label class="file-item-checkbox custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label"></span>
                </label>
                <div class="file-item-icon far fa-folder text-secondary"></div>
                <a href="javascript:void(0)" class="file-item-name" data-title="{{$library_album->id}}" onClick="showTitle($(this))">
                    {{$library_album->title}}
                </a>
                <div class="file-item-changed">02/13/2018</div>
                <div class="file-item-actions btn-group">
                    <button type="button" class="btn btn-default btn-sm rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                        <a class="dropdown-item" href="javascript:void(0)" data-id="{{$library_album->id}}" onClick="removeAlbum($(this))">Remove</a>
                        <a class="dropdown-item" href="javascript:void(0)">Move</a>
                        <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                    </div>
                </div>
            </div>


            @endforeach
        @endisset
    </div>

    <div class="row" id="dynamic_row">

    </div>


    </div>
</div>
    <div class="row dynamic_row">

    </div>

        

@endsection
@push('push-script')


<script>

         var libraryAlbums = {!! json_encode($library_types) !!};
         let library_id;
        library_id=libraryAlbums.id;

    function showTitle(_this) {
        alert(_this.attr('data-title'));
        var album_id=_this.attr('data-title');
   
        $.ajax({
            type: "post",
            url: "{{url('admin/library_album_details/add')}}",
            data: {library_id:library_id, album_id:album_id},
            
            success: function (res) {
                // console.log(res.html);
                $('.default_row').hide();
                $('.dynamic_row').empty().append(res.html);
            }
        });



    }
    function removeAlbum(_this){
        alert(_this.attr('data-id'));
        var id=_this.attr('data-id');


        $.ajax({
                type: "post",
                url: "{{url('admin/library_album/remove')}}",
                data: {id: id},
                success: function (res) {
                    console.log(res.mesage);

                    $('#default_row').hide();
                $('#dynamic_row').html(res.html);
                        $('#message').removeClass('alert-danger').addClass('alert alert-success').html(res.message);

                    // $('#message').show();

                    setTimeout(function(){
                        $('#message').html('').removeClass('alert alert-success');
                    }, 1000);

                }
        });

    }
    $(document).ready(function() {
   
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
  
    $(document).on('click', '.album_create', function() {
        console.log('ok');
        
        
        
        console.log(libraryAlbums);
        console.log(library_id);
        $.ajax({
            type: "post",
            url: "{{url('admin/library_album')}}",
            data: {library_id: library_id},
            success: function (res) {
                console.log(res.status);
                console.log(res.html);
                $('#default_row').hide();
                $('#dynamic_row').empty().append(res.html);

            }
    });
   
    
     


    

            
    });
    $(document).on('click','#sub_album', function(){
        alert(library_id);

       var parent_id=$('#sub_album').attr('parent_id');
       $.ajax({
            type: "post",
            url: "{{url('admin/sub_album')}}",
            data: {parent_id: parent_id , library_id:library_id},
            success: function (res) {
                console.log(res.status);
                console.log(res.html);
                $('#default_row_sub_album').hide();
                $('#sub_album_dynamic').empty().append(res.html);

            }
    });
       
        

});

  
  });
</script>
@endpush