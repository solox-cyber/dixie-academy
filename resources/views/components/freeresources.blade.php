@props(['resource'])

<div class="item">
    <img src="{{ $resource->getThumbnailImage() }}" alt="{{$resource->title}}" style="height:220px;width:500px">
    <div class="down-content">
        <h4>{{$resource->title}}</h4>
        <div class="info">
            <div class="row">
                <div class="col-8">
                    <div class="main-button-red">
                        <a href="{{route('resource.show', $resource->id)}}">Purchase</a>
                    </div>
                </div>
                <div class="col-4">
                    <span>@if ($resource->price<=0) Free @else ${{$resource->price}}
                            @endif
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>
