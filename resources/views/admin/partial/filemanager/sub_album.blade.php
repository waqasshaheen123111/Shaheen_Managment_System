
@php
    
    $parent_id=$parent_id;
    
@endphp
<div class="container flex-grow-1 light-style container-p-y">
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
                <button type="button" id="file_create" class="btn btn-primary mr-2"  ><i class="ion ion-md-cloud-upload"></i>&nbsp; Add Files</button>
                <button type="button" id="sub_album" parent_id="{{$parent_id}}"  class="btn btn-primary mr-2 "  ><i class="ion ion-md-cloud-upload"></i>&nbsp;  Create Album </button>
                
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


    @if($library_albums!==Null && !empty($library_albums))
        <div class="file-manager-container file-manager-col-view">
            <div class="file-manager-row-header">
                <div class="file-item-name pb-2">Filename</div>
                <div class="file-item-changed pb-2">Changed</div>
            </div>


                <div class="row " id="default_row_sub_album">

                    
                    @foreach ($library_albums as $library_album)
                    




                
                            <div class="file-item" >
                                <div class="file-item-select-bg bg-primary"></div>
                                <label class="file-item-checkbox custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" />
                                    <span class="custom-control-label"></span>
                                </label>
                                <div class="file-item-icon far fa-folder text-secondary"></div>
                                <a href="javascript:void(0)" data-title="{{$library_album->id}}" class="file-item-name" onClick="showTitle($(this))">
                                {{$library_album->title}}
                                </a>
                                <div class="file-item-changed">02/13/2018</div>
                                <div class="file-item-actions btn-group">
                                    <button type="button" class="btn btn-default btn-sm rounded-pill icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown"><i class="ion ion-ios-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                        <a class="dropdown-item" href="javascript:void(0)" data-id="{{$library_album->id}}" onClick="removeAlbum($(this))">Remove</a>
                                    </div>
                                </div>
                            </div>



                    @endforeach

                </div>  

                <div class="row" id="sub_album_dynamic">


                </div>
        </div>
        @else
        

    @endif

</div>