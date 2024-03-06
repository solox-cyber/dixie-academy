<div class="owl-courses-item owl-carousel">
    @foreach ($freeresources as $resource)
    <div class="item">
        <img src="{{ $resource->getThumbnailImage() }}" alt="{{$resource->title}}">
        <div class="down-content">
          <h4>{{$resource->title}}</h4>
          <div class="info">
            <div class="row">
              <div class="col-8">
                <div class="main-button-red">
                    <a href="{{route('resources')}}">Purchase</a>
                  </div>
              </div>
              <div class="col-4">
                 <span>@if ($resource->price<=0)
                   Free
                   @else
                   ${{$resource->price}}
                 @endif
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach

  </div>
