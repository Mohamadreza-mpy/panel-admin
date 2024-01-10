<?php

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Ista;
use App\Models\Setting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

if (Schema::hasTable('service_categories')) {
    try {
        $setting = Setting::first();
        $service_footer = Service::where('status', 1)->where('show_footer', 1)->take(10)->get();
        $serviceCategory = ServiceCategory::where('status', 1)->get();
        $ista_menus = Ista::where('show_menu', 1)->get();
        $ista_footers = Ista::where('show_footer', 1)->take(5)->get();
        View::share([
            'setting' => $setting,
            'service_footer' => $service_footer,
            'serviceCategories' => $serviceCategory,
            'ista_menus' => $ista_menus,
            'ista_footers' => $ista_footers,
        ]);
    } catch (Exception $e) {
        Log::info( $e->getMessage());
    }
}

