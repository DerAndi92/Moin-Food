@extends('backend.master.master1column')

@section('header')
    <div class="page-header">
        <h1>@lang('admin.pages.dashboard.breadcrumbs.title')</h1>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-utensils fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$restaurants}}</div>
                                <div>@lang('admin.pages.dashboard.panels.restaurants.title')</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('admin.restaurants.index')}}">
                        <div class="panel-footer">
                            <span class="pull-left">@lang('admin.pages.dashboard.panels.restaurants.all')</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection