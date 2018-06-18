@extends('backend.master.master2column')

@section('header')
    <div class="page-header">
        <h1>@lang('admin.pages.restaurant_types.titles.edit')</h1>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" id="edit-form" action="{{route('admin.restaurant_types.update', ['id' => $type->id])}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input id="form-name" type="text" class="form-control" name="name" placeholder="@lang('admin.attributes.name')" value="{{ old('name') ?  old('name') : $type->name}}" required>
                        @include('backend.partials.form-error', ['field' => 'title'])
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
                   'destroy' => route('admin.restaurant_types.destroy', ['id' => $type->id]),
                   'cancel' => route('admin.restaurant_types.index'),
                   'entity' => $type
                ])
            </div>
        </div>
    </div>
@endsection