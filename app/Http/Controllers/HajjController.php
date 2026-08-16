<?php

namespace App\Http\Controllers;

use App\Models\HajjPackagesPage;
use App\Models\SingleHijjPackagePage;
use App\Models\HajjPackages;
use Illuminate\Http\Request;
use App\Services\Hajj\ListPackages;
use App\Services\Hajj\ShowPackage;
use App\Models\HajjBooking;
use App\Models\HajjPrice;
use App\Enums\RoomTypes;


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
        $validated = $request->validate([
            'package_id' => [
                'required',
                'integer',
                'exists:hajj_packages,id',
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
        $price = HajjPrice::where('hajj_package_id', $request->hajj_package_id)
            ->where('type', $roomType)
            ->firstOrFail();

        HajjBooking::create([
            'hajj_package_id' => $request->hajj_package_id,
            'hajj_price_id'   => $price->id,
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