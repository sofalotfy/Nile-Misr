<?php

namespace App\Http\Controllers;

use App\Enums\RoomTypes;
use App\Models\UmrahPackagesPage;
use App\Models\SingleUmrahPackagePage;
use App\Models\UmrahPackages;
use Illuminate\Http\Request;
use App\Services\Umrah\ListPackages;
use App\Services\Umrah\ShowPackage;
use App\Models\UmrahPrice;
use App\Models\UmrahBooking;

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
        $validated = $request->validate([
            'package_id' => [
                'required',
                'integer',
                'exists:umrahs_packages,id',
            ],

            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],

            'phone' => [
                'required',
                'string',
                'min:8',
                'max:20',
            ],

            'room-type' => [
                'required',
                'in:single,double,triple,quad',
            ],

            'count' => [
                'required',
                'integer',
                'min:1',
                'max:5',
            ],
        ]);
        
        
        $roomType = match ($request['room-type']) {
                'single' => RoomTypes::فردي->value,
                'double' => RoomTypes::ثنائـــــــــي->value,
                'triple' => RoomTypes::ثلاثــــــــي->value,
                'quad'   => RoomTypes::رباعي_أو_خماسي->value,
                default  => abort(422, 'نوع الغرفة غير صالح'),
            };
        $price = UmrahPrice::where('umrah_package_id', $request->package_id)
            ->where('type', $roomType)
            ->firstOrFail();

        UmrahBooking::create([
            'umrah_package_id' => $request->package_id,
            'umrah_price_id'   => $price->id,
            'name'            => $request->name,
            'phone'           => $request->phone,
            'count'            => $request->count,
            'price'            => ($price->price * $request->count),
        ]);
        
        return redirect()
            ->back()
            ->with('success', 'تم إرسال طلب الحجز بنجاح');
    }
}