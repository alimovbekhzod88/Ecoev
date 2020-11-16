<?php

namespace App\Http\Controllers;

use App\Furniture;
use App\Gallery;
use App\Houseplan;
use App\Http\LocaleManager;
use App\Main;
use App\Outsideview;
use App\Workprocess;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index($locale = 'tr')
    {
        Session::put('locale', $locale);

        if ($locale != 'tr' && $locale != 'en') {
            return abort(404);
        } else
            LocaleManager::bindLocale($locale);
      
        $main = Main::first();
        $outside = Outsideview::withTranslations($locale)->first();
        $furniture = Furniture::withTranslations($locale)->first();
        $houseplan = Houseplan::withTranslations($locale)->first();
        $workprocess = Workprocess::withTranslations($locale)->first();
        $gallery = Gallery::limit(7)->get();
        // dd($gallery);
        return view("index", compact('main', 'outside', 'furniture', 'houseplan', 'workprocess', 'gallery', 'locale'));
    }
}
