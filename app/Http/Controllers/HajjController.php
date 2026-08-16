<?php

namespace App\Http\Controllers;

use App\Models\HajjPackagesPage;
use Illuminate\Http\Request;
use App\Services\Hajj\ListPackages;

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
            'package' => $hajj_package,
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}