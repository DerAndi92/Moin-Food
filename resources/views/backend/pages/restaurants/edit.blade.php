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
                <form method="POST" id="edit-form" action="{{route('admin.restaurants.update', ['id' => $restaurant->id])}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input id="form-name" type="text" class="form-control" name="name" placeholder="@lang('admin.attributes.name')" value="{{ old('name') ?  old('name') : $restaurant->name}}" required>
                        @include('backend.partials.form-error', ['field' => 'title'])
                    </div>
                    <div class="form-group">
                        <textarea name="text" id="form-text" rows="10" cols="80">
                            {!! old('text') ?  old('text') : $restaurant->text !!}
                        </textarea>
                        @include('backend.partials.form-error', ['field' => 'text'])
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

@section('assets.js')
    @include('backend.partials.editor', ['field' => 'form-text'])
@endsection