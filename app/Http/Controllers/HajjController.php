<?php

namespace App\Http\Controllers;

use App\Models\HajjPackagesPage;
use Illuminate\Http\Request;
use App\Services\Hajj\ListPackages;
use App\Services\Hajj\SingleHijjPackagePage;

class HajjController extends Controller
{
    public function index()
    {
        return view('hajj', [
            'pageData' => HajjPackagesPage::first(),
            'hajj_programs' => ListPackages::execute(),
        ]);
    }

    public function show($hajj_package)
    {
        return view('hajj-details', [
            'pageData'=> SingleHijjPackagePage::first(),
            'package' => $hajj_package,
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}