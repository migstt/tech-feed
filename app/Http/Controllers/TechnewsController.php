<?php

namespace App\Http\Controllers;

use App\Models\News;
use NewsdataIO\NewsdataApi;

class TechnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function getWeeklyTechNews()
    {
        $newsdataApiObj = new NewsdataApi(config('services.newsdataio.api_key'));
        $data = array("category" => "technology", "language" => "en", "country" => "us");

        return $newsdataApiObj->get_latest_news($data);
    }
}
