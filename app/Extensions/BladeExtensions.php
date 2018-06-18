<?php namespace MoinFood\Extensions;

class BladeExtensions {

    public static function register()
    {
        \Blade::extend(function($value) {
            return preg_replace('/\@define(.+)/', '<?php ${1}; ?>', $value);
        });
    }

}