@extends('backend.master.master1column')

@section('header')
    <div class="page-header">
        <h1>@lang('admin.pages.restaurant_types.breadcrumbs.create')</h1>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{route('admin.restaurant_types.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input id="form-name" type="text" class="form-control" name="name" placeholder="@lang('admin.attributes.name')" value="{{ old('name') }}" required>
                        @include('backend.partials.form-error', ['field' => 'name'])
                    </div>
                    <button type="submit" class="btn btn-success">@lang('admin.actions.save')</button>
                    <a href="{{route('admin.restaurant_types.index')}}" class="btn btn-warning">@lang('admin.actions.cancel')</a>
                </form>
            </div>
        </div>
    </div>
@endsection