<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Services\Pages\Home;
use App\Services\Pages\About;
use App\Services\Pages\Services;
use App\Services\Pages\SuperVisors;
use App\Services\Pages\WhyUs;
use App\Services\Pages\Reviews;
use App\Services\Pages\Media;
use App\Services\Umrah\ListPackages;
use App\Services\Reviews\ListReviews;

class SinglePageController extends Controller
{
    public function index()
    {
        return view("index", [
            "pageData"  => Home::execute(),
            "umrah_programs"  => ListPackages::execute(),
            "reviews" => ListReviews::execute(),
        ]);
    }

    public function about()
    {
        return view("about", [
            "pageData"  => About::execute(),
        ]);
    }

    public function services()
    {
        return view("services", [
            "pageData"  => Services::execute(),
        ]);
    }

    public function moderators()
    {
        return view("moderators", [
            "pageData"  => SuperVisors::execute(),
        ]);
    }

    public function whyus()
    {
        return view("why-nile-misr", [
            "pageData"  => WhyUs::execute(),
        ]);
    }

    public function reviews()
    {
        return view("user-review", [
            "pageData"  => Reviews::execute(),
            "reviews" => ListReviews::execute(),
        ]);
    }

    public function media()
    {
        return view("media", [
            "pageData"  => Media::execute(),
        ]);
    }
}
