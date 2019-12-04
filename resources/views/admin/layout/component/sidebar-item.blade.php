<li @if(Route::currentRouteName() == $route) class="active" @endif>
    <a href="{{route($route)}}"><i class="{{$icon}}"></i> <span>{{$name}}</span></a>
</li>