<?php

namespace App\Http\Controllers;

use App\Models\UmrahPackagesPage;
use Illuminate\Http\Request;
use App\Services\Umrah\ListPackages;

class UmrahController extends Controller
{
    public function index()
    {        
        return view('umrah', [
            'pageData' => UmrahPackagesPage::first(),
            'umrah_programs' => ListPackages::execute(),
        ]);
    }

    public function show($umrah_package)
    {
        return view('umrah-details', [
            'package' => $umrah_package,
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}