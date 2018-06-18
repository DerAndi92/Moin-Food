<?php

// Index
Breadcrumbs::register('admin.index', function($breadcrumbs)
{
    $breadcrumbs->push(Lang::get('admin.pages.dashboard.breadcrumbs.title'), route('admin.index'));
});

// Restaurants
Breadcrumbs::register('admin.restaurants.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('admin.pages.restaurants.breadcrumbs.index'), route('admin.restaurants.index'));
});
Breadcrumbs::register('admin.restaurants.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.restaurants.index');
    $breadcrumbs->push(Lang::get('admin.pages.restaurants.breadcrumbs.create'), route('admin.restaurants.create'));
});
Breadcrumbs::register('admin.restaurants.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.restaurants.index');
    $breadcrumbs->push(Lang::get('admin.pages.restaurants.breadcrumbs.edit'));
});

// Properties
Breadcrumbs::register('admin.properties.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('admin.pages.properties.breadcrumbs.index'), route('admin.properties.index'));
});
Breadcrumbs::register('admin.properties.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.properties.index');
    $breadcrumbs->push(Lang::get('admin.pages.properties.breadcrumbs.create'), route('admin.properties.create'));
});
Breadcrumbs::register('admin.properties.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.properties.index');
    $breadcrumbs->push(Lang::get('admin.pages.properties.breadcrumbs.edit'));
});

// Kitchens
Breadcrumbs::register('admin.kitchens.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('admin.pages.kitchens.breadcrumbs.index'), route('admin.kitchens.index'));
});
Breadcrumbs::register('admin.kitchens.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.kitchens.index');
    $breadcrumbs->push(Lang::get('admin.pages.kitchens.breadcrumbs.create'), route('admin.kitchens.create'));
});
Breadcrumbs::register('admin.kitchens.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.kitchens.index');
    $breadcrumbs->push(Lang::get('admin.pages.kitchens.breadcrumbs.edit'));
});

// Restaurant Types
Breadcrumbs::register('admin.restaurant_types.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('admin.pages.restaurant_types.breadcrumbs.index'), route('admin.restaurant_types.index'));
});
Breadcrumbs::register('admin.restaurant_types.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.restaurant_types.index');
    $breadcrumbs->push(Lang::get('admin.pages.restaurant_types.breadcrumbs.create'), route('admin.restaurant_types.create'));
});
Breadcrumbs::register('admin.restaurant_types.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.restaurant_types.index');
    $breadcrumbs->push(Lang::get('admin.pages.restaurant_types.breadcrumbs.edit'));
});

