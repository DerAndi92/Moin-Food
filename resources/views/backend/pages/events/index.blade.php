@extends('backend.master.master1column')

@section('header')
    <div class="page-header with-menu">
        <h1>@lang('admin.pages.events.titles.index')</h1>
        <ul>
            <li>
                <a class="fa-button" href="{{route('admin.events.create')}}" title="@lang('admin.actions.create')">
                    <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i>
                    <span>@lang('admin.actions.create')</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    @if(count($events) > 0)
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped list-table">
                        <thead>
                            <th class="id">@lang('admin.attributes.id')</th>
                            <th class="title">@lang('admin.attributes.name')</th>
                            <th class="actions"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td class="id">{{$event->id}}</td>
                                <td>{{$event->name}}</td>
                                <td class="actions">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown">@lang('admin.actions.actions')
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('admin.events.edit', ['id' => $event->id])}}"><i class="fa fa-edit fa-fw" aria-hidden="true"></i> @lang('admin.actions.edit')</a></li>
                                            <li><a confirm-action="@lang('admin.messages.destroy')" href="{{route('admin.events.destroy', ['id' => $event->id])}}"><i class="fa fa-remove fa-fw" aria-hidden="true"></i> @lang('admin.actions.delete')</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    @include('backend.partials.paginator', ['paginator' => $events])
                </div>
            </div>
        </div>
    @endif
@endsection