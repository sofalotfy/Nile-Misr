<?php

namespace App\Http\Controllers;

use App\Models\HajjPackagesPage;
use App\Models\SingleHijjPackagePage;
use App\Models\HajjPackages;
use Illuminate\Http\Request;
use App\Services\Hajj\ListPackages;
use App\Services\Hajj\ShowPackage;

class HajjController extends Controller
{
    public function index()
    {
        return view('hajj', [
            'pageData' => HajjPackagesPage::first(),
            'hajj_programs' => ListPackages::execute(),
        ]);
    }

    public function show(HajjPackages $hajj_package)
    {
        return view('hajj-details', [
            'pageData'=> SingleHijjPackagePage::first(),
            'package' => ShowPackage::execute($hajj_package),
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}