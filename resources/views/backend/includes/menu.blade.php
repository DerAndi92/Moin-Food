<a id="logo" href="{{route('home')}}" title="">
    <img alt="Pixories Logo" src="{{ URL::asset('assets/images/backend/Logo.svg') }}">
</a>
<div id="nav-toggle">
    <a href="#">
        <span class="fa fa-bars fa-2x"></span>
    </a>
</div>
<nav>
    <ul>
        <li class="{{\MoinFood\Helper\BladeHelper::activeRouteSegment(2,'') ? 'active' : ''}}">
            <a href="{{route('admin.index')}}">@lang('admin.pages.dashboard.breadcrumbs.title')</a>
        </li>
        <li class="{{\MoinFood\Helper\BladeHelper::activeRouteSegment(2,'restaurants') ? 'active' : ''}}">
            <a href="{{route('admin.restaurants.index')}}">@lang('admin.pages.restaurants.titles.index')</a>
        </li>
        <li class="{{\MoinFood\Helper\BladeHelper::activeRouteSegment(2,'properties') ? 'active' : ''}}">
            <a href="{{route('admin.properties.index')}}">@lang('admin.pages.properties.titles.index')</a>
        </li>
        <li class="{{\MoinFood\Helper\BladeHelper::activeRouteSegment(2,'restaurant_types') ? 'active' : ''}}">
            <a href="{{route('admin.restaurant_types.index')}}">@lang('admin.pages.restaurant_types.titles.index')</a>
        </li>
        <li class="{{\MoinFood\Helper\BladeHelper::activeRouteSegment(2,'kitchens') ? 'active' : ''}}">
            <a href="{{route('admin.kitchens.index')}}">@lang('admin.pages.kitchens.titles.index')</a>
        </li>
    </ul>
</nav>