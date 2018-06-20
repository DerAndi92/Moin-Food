<!-- Search -->
<section id="search">
    <div class="container">
        <form action="{{route('search')}}" method="POST"  id="mf-search" class="search-form">
            {{ csrf_field() }}
            <div class="search-inner">
                <div class="search-map-icon"></div>

                <h1>Essen. Trinken. Überall in Hamburg.</h1>
                <div class="search-form-wrapper">
                    <div class="search-form-fields">
                        <div class="search-input-place">
                            <input id="restaurant-search" type="text" name="place" class="input" tabindex="1" placeholder="Wo möchtest du suchen?" required/>
                            <span class="locate-icon"></span>
                        </div>
                        <div class="search-options">
                            <div class="mf-input-select">
                                <select name="price_category">
                                    <option class="icon-down-open" value="0" selected="true">Preiskategorie</option>
                                    <option class="icon-down-open" value="1">Preiswert</option>
                                    <option class="icon-down-open" value="2">Mittelmaß</option>
                                    <option class="icon-down-open" value="3">Gehoben</option>
                                </select>
                            </div>
                            <div class="mf-input-select">
                                <select name="kitchen">
                                    <option class="icon-down-open" value="0" selected="true">Landesküche</option>
                                    @foreach($kitchens as $kitchen)
                                        <option class="icon-down-open" value="{{$kitchen->id}}">{{$kitchen->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mf-input-select">
                                <select name="event">
                                    <option class="icon-down-open" value="0" selected="true">Anlass</option>
                                    @foreach($events as $event)
                                        <option class="icon-down-open" value="{{$event->id}}">{{$event->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mf-input-select">
                                <select name="restaurant_type">
                                    <option class="icon-down-open" value="0" selected="true">Ambiente</option>
                                    @foreach($restaurantTypes as $restaurantType)
                                        <option class="icon-down-open" value="{{$restaurantType->id}}">{{$restaurantType->name}}</option>
                                    @endforeach
                                </select>
                             </div>
                        </div>
                    </div>

                    <div class="search-form-buttons">
                        <button type="submit" class="search-button" name="action" value="1">Los geht's!</button>
                        <a href="/" class="search-more-button">weitere Optionen</a>
                    </div>
                </div>
            </div>
            <div class="search-extend">
                @foreach($properties as $property)
                    <label class="checkbox-container">{{$property->name}}
                        <input type="checkbox" name="properties[]" value="{{$property->id}}">
                        <span class="checkmark"></span>
                    </label>
                @endforeach
            </div>
        </form>
    </div>
</section>

@section('scripts')
    <script>
        var haystack = [
            @foreach($places as $place)"{{$place->zip}}", @endforeach
            @foreach($places->pluck('name')->unique()->all() as $place)"{{$place}}", @endforeach
        ];

        $(function(){
            $('#restaurant-search').suggest(haystack, {
                suggestionColor   : '#b7b6b6',
                moreIndicatorClass: 'suggest-more',
                moreIndicatorText : '&hellip;'
            });
        });
    </script>
@endsection