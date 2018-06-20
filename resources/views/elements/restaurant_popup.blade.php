<div class="popup_content">
    @if($restaurant->getImage())
        <div class="popup-img_bg">
            <img src="{{asset('images/content/restaurants/' . $restaurant->getImage()->name) }}" />
        </div>
    @endif
    <div class="popup-details">
        <h4>{{$restaurant->name}}</h4>
        <p class="properties">
            <b>Merkmale:</b> @foreach($restaurant->properties as $property) {{$property->name}},@endforeach
        </p>
        <p class="description">
            {{$restaurant->description}}
        </p>
        <ul class="ratings">
            <li class="price">
                <span class="rating-title">Preise</span>
                <span class="rating-icon"><img src="{{asset('images/template/icon-price.png')}}"/></span>
                <span class="rating-info">
                    @switch($restaurant->price_category)
                        @case(1)
                            Preiswert
                            @break
                        @case(1)
                            Mittelmaß
                            @break
                        @case(1)
                            Gehoben
                            @break
                    @endswitch
                </span>
            </li>
            <li>
                <span class="rating-title">Ambiente</span>
                <span class="rating-icon"><img src="{{asset('images/template/icon-ambient.png')}}"/></span>
                <span class="rating-info">{{$restaurant->getRatingInWords($restaurant->rating_ambiance)}}</span>
            </li>
            <li>
                <span class="rating-title">Geschmack</span>
                <span class="rating-icon"><img src="{{asset('images/template/icon-food.png')}}"/></span>
                <span class="rating-info">{{$restaurant->getRatingInWords($restaurant->rating_taste)}}</span>
            </li>
            <li>
                <span class="rating-title">Service</span>
                <span class="rating-icon"><img src="{{asset('images/template/icon-service.png')}}"/></span>
                <span class="rating-info">{{$restaurant->getRatingInWords($restaurant->rating_service)}}</span>
            </li>
        </ul>
        <div class="address">
            <iframe
                    width="100%"
                    height="300"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCYzePzLXu2tZ5MmYrayfQ4bakLQl_xXzk&q={{$restaurant->name}},{{$restaurant->place->zip}} {{$restaurant->place->name}}" allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
<a href="#" class="popup_close"><i class="fa fa-times"></i></a>