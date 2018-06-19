<?php // Code within app\Helpers\Helper.php

namespace MoinFood\Helper;

use Illuminate\Support\Facades\Request;

class BladeHelper
{

    public static function activeRoutePath($path)
    {
        return Request::is($path) ? ' class="active"' : false;
    }

    public static function googleSlug($string) {

    }

    public static function activeRouteSegment($segment, $value)
    {
        if(!is_array($value)) {
            return Request::segment($segment) == $value ? ' class="active"' : '';
        }
        foreach ($value as $v) {
            if(Request::segment($segment) == $v) return ' class="active"';
        }

        return false;
    }

    public static function transformDatetime($date) {
        return $date->format(trans('main.dates.default'));
    }
    public static function transformDate($date) {
        return $date->format(trans('main.dates.date'));
    }
    public static function transformTime($date) {
        return $date->format(trans('main.dates.time'));
    }

}