<div class="popup_content">
    @if($restaurant->getImage())
        <div class="popup-img_bg">
            <img src="{{asset('images/content/restaurants/' . $restaurant->getImage()->name) }}" />
        </div>
    @endif
    <div class="popup-details">
        <h4>{{$restaurant->name}}</h4>
        <p class="description">
            {{$restaurant->description}}
        </p>
        <div class="ratings">

        </div>
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