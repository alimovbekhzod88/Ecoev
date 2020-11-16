<?php

namespace App\Http;


use Illuminate\Support\Facades\App;

class LocaleManager
{
    public static function bindLocale($locale) :string
    {
        if ($locale) {
            App::setLocale($locale);
        }

        $locale = App::getLocale();

        return $locale;
    }
}