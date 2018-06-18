@extends('backend.master.master2column')

@section('header')
    <div class="page-header">
        <h1>@lang('admin.pages.restaurants.titles.edit')</h1>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data" id="edit-form" action="{{route('admin.restaurants.update', ['id' => $restaurant->id])}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input id="form-name" type="text" class="form-control" name="name" placeholder="@lang('admin.attributes.name')" value="{{ old('name') ?  old('name') : $restaurant->name}}" required>
                        @include('backend.partials.form-error', ['field' => 'name'])
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="form-description" placeholder="Kurzbeschreibung ..." name="description" rows="4">@if(old('description')){{old('description')}}@elseif($restaurant->description){{$restaurant->description}}@endif</textarea>
                        @include('backend.partials.form-error', ['field' => 'description'])
                    </div>
                    <div class="form-group">
                        <label for="form-image">Bild</label>
                        <input type="file" name="image" class="form-control-file" id="form-image">
                        @include('backend.partials.form-error', ['field' => 'image'])
                        @if($restaurant->hasImage())
                            <a href="{{asset('images/content/restaurants/' . $restaurant->images->first()->name)}}" target="_blank"><img class="image-preview" src="{{asset('images/content/restaurants/' . $restaurant->images->first()->name)}}"></a>
                        @endif
                    </div>

                    <div class="page-header">
                        <h4>Weitere Attribute</h4>
                    </div>
                    <div class="form-group">
                        <label for="restaurant_type">Straße</label>
                        <input id="form-street" type="text" class="form-control" name="street" placeholder="Straße" value="{{ old('street') ?  old('street') : $restaurant->street}}">
                        @include('backend.partials.form-error', ['field' => 'street'])
                    </div>
                    <div class="form-group">
                        <label for="restaurant_type">Highlight</label>
                        <select class="form-control" id="form-highlight" name="highlight">
                            <option value="0">Nein</option>
                            @if(old('highlight') and old('highlight') == 1)
                                <option value="1" selected>Ja</option>
                            @elseif($restaurant->highlight and $restaurant->highlight == 1)
                                <option value="1" selected>Ja</option>
                            @else
                                <option value="1">Ja</option>
                            @endif
                        </select>
                        @include('backend.partials.form-error', ['field' => 'highlight'])
                    </div>
                    <div class="form-group">
                        <label for="restaurant_type">Standort</label>
                        <select class="form-control" id="form-place_id" name="place_id">
                            @foreach($places as $place)
                                @if(old('place_id') and old('place_id') == $place->id)
                                    <option value="{{$place->id}}" selected>{{$place->zip}} ({{$place->name}})</option>
                                @elseif($restaurant->place_id and $restaurant->place_id == $place->id)
                                    <option value="{{$place->id}}" selected>{{$place->zip}} ({{$place->name}})</option>
                                @else
                                    <option value="{{$place->id}}">{{$place->zip}} ({{$place->name}})</option>
                                @endif
                            @endforeach
                        </select>
                        @include('backend.partials.form-error', ['field' => 'place_id'])
                    </div>
                    <div class="form-group">
                        <label for="restaurant_type">Ambiente</label>
                        <select class="form-control" id="form-restaurant_type_id" name="restaurant_type_id">
                            @foreach($restaurantTypes as $restaurantType)
                                @if(old('restaurant_type_id') and old('restaurant_type_id') == $restaurantType->id)
                                    <option value="{{$restaurantType->id}}" selected>{{$restaurantType->name}}</option>
                                @elseif($restaurant->restaurant_type_id and $restaurant->restaurant_type_id == $restaurantType->id)
                                    <option value="{{$restaurantType->id}}" selected>{{$restaurantType->name}}</option>
                                @else
                                    <option value="{{$restaurantType->id}}">{{$restaurantType->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        @include('backend.partials.form-error', ['field' => 'restaurant_type_id'])
                    </div>
                    <div class="form-group">
                        <label for="restaurant_type">Preiskategorie</label>
                        <select class="form-control" id="form-price_category" name="price_category">
                            @foreach($priceCategories as $key => $value)
                                @if(old('price_category') and old('price_category') == $key)
                                    <option value="{{$key}}" selected>{{$value}}</option>
                                @elseif($restaurant->price_category and $restaurant->price_category == $key)
                                    <option value="{{$key}}" selected>{{$value}}</option>
                                @else
                                    <option value="{{$key}}">{{$value}}</option>
                                @endif
                            @endforeach
                        </select>
                        @include('backend.partials.form-error', ['field' => 'price_category'])
                    </div>
                    <div class="form-group">
                        <label for="restaurant_type">Wertung: Ambiente</label>
                        <select class="form-control" id="form-rating_ambiance" name="rating_ambiance">
                            @foreach($ratings as $rating)
                                @if(old('rating_ambiance') and old('rating_ambiance') == $rating)
                                    <option value="{{$rating}}" selected>{{$rating}}</option>
                                @elseif($restaurant->rating_ambiance and $restaurant->rating_ambiance == $key)
                                    <option value="{{$rating}}" selected>{{$rating}}</option>
                                @else
                                    <option value="{{$rating}}">{{$rating}}</option>
                                @endif
                            @endforeach
                        </select>
                        @include('backend.partials.form-error', ['field' => 'rating_ambiance'])
                    </div>
                    <div class="form-group">
                        <label for="restaurant_type">Wertung: Service</label>
                        <select class="form-control" id="form-rating_service" name="rating_service">
                            @foreach($ratings as $rating)
                                @if(old('rating_service') and old('rating_service') == $rating)
                                    <option value="{{$rating}}" selected>{{$rating}}</option>
                                @elseif($restaurant->rating_service and $restaurant->rating_service == $key)
                                    <option value="{{$rating}}" selected>{{$rating}}</option>
                                @else
                                    <option value="{{$rating}}">{{$rating}}</option>
                                @endif
                            @endforeach
                        </select>
                        @include('backend.partials.form-error', ['field' => 'rating_service'])
                    </div>
                    <div class="form-group">
                        <label for="restaurant_type">Wertung: Geschmack</label>
                        <select class="form-control" id="form-rating_taste" name="rating_taste">
                            @foreach($ratings as $rating)
                                @if(old('rating_taste') and old('rating_taste') == $rating)
                                    <option value="{{$rating}}" selected>{{$rating}}</option>
                                @elseif($restaurant->rating_taste and $restaurant->rating_taste == $key)
                                    <option value="{{$rating}}" selected>{{$rating}}</option>
                                @else
                                    <option value="{{$rating}}">{{$rating}}</option>
                                @endif
                            @endforeach
                        </select>
                        @include('backend.partials.form-error', ['field' => 'rating_taste'])
                    </div>
                    <div class="form-group">
                        <label>Landesküchen</label>
                        @foreach($kitchens as $kitchen)
                            <div class="form-check form-check-inline">
                                @if(is_array(old('kitchens')) and in_array($kitchen->id, old('kitchens')))
                                    <input class="form-check-input" name="kitchens[]" type="checkbox" value="{{$kitchen->id}}" checked>
                                @elseif($restaurant->hasKitchen($kitchen))
                                    <input class="form-check-input" name="kitchens[]" type="checkbox" value="{{$kitchen->id}}" checked>
                                @else
                                    <input class="form-check-input" name="kitchens[]" type="checkbox" value="{{$kitchen->id}}">
                                @endif
                                {{$kitchen->name}}
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label>Anlässe</label>
                        @foreach($events as $event)
                            <div class="form-check form-check-inline">
                                @if(is_array(old('events')) and in_array($event->id, old('events')))
                                    <input class="form-check-input" name="events[]" type="checkbox" value="{{$event->id}}" checked>
                                @elseif($restaurant->hasEvent($event))
                                    <input class="form-check-input" name="events[]" type="checkbox" value="{{$event->id}}" checked>
                                @else
                                    <input class="form-check-input" name="events[]" type="checkbox" value="{{$event->id}}">
                                @endif
                                {{$event->name}}
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label>Eigenschaften</label>
                        @foreach($properties as $property)
                            <div class="form-check form-check-inline">
                                @if(is_array(old('properties')) and in_array($property->id, old('properties')))
                                    <input class="form-check-input" name="properties[]" type="checkbox" value="{{$property->id}}" checked>
                                @elseif($restaurant->hasProperty($property))
                                    <input class="form-check-input" name="properties[]" type="checkbox" value="{{$property->id}}" checked>
                                @else
                                    <input class="form-check-input" name="properties[]" type="checkbox" value="{{$property->id}}">
                                @endif
                                {{$property->name}}
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('sidebar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('backend.partials.sidebar', [
                   'update' => 'edit-form',
                   'destroy' => route('admin.restaurants.destroy', ['id' => $restaurant->id]),
                   'cancel' => route('admin.restaurants.index'),
                   'entity' => $restaurant
                ])
            </div>
        </div>
    </div>
@endsection