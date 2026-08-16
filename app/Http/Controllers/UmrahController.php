<?php

namespace App\Http\Controllers;

use App\Models\UmrahPackagesPage;
use App\Models\SingleUmrahPackagePage;
use App\Models\UmrahPackages;
use Illuminate\Http\Request;
use App\Services\Umrah\ListPackages;
use App\Services\Umrah\ShowPackage;

class UmrahController extends Controller
{
    public function index()
    {        
        return view('umrah', [
            'pageData' => UmrahPackagesPage::first(),
            'umrah_programs' => ListPackages::execute(),
        ]);
    }

    public function show(UmrahPackages $umrah_package)
    {
        return view('umrah-details', [
            'pageData' => SingleUmrahPackagePage::first(),
            'package' => ShowPackage::execute($umrah_package),
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}