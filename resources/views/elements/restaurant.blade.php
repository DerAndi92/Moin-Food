<li class="restaurant-card">
    <a rel="nofollow" data-popup="restaurant.get.{{$restaurant->id}}" href="{{route('restaurant', ['id' => $restaurant->id])}}" class="wrapper">
        <img src="{{asset('images/content/restaurants/' . $restaurant->getImage()->name) }}" />
        <div class="meta">
            <span class="distance">12 Shops</span>
        </div>
        <div class="body">
            <h4>{{$restaurant->name}}</h4>
            <p>
                {{$restaurant->description}}
            </p>
        </div>
    </a>
</li>