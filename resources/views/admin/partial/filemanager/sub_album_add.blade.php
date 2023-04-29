

@foreach ($library_albums as $library_album)
    




 
    <div class="file-item" >
        <div class="file-item-select-bg bg-primary"></div>
        <label class="file-item-checkbox custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" />
            <span class="custom-control-label"></span>
        </label>
        <div class="file-item-icon far fa-folder text-secondary"></div>
        <a href="javascript:void(0)" data-title="{{$library_album->id}}"  class="file-item-name" onClick="showTitle($(this))">
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

