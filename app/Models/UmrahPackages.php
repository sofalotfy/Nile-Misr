<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Hotel;
use App\Enums\StayDuration;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UmrahPackages extends Model
{
    protected $table = 'umrahs_packages';

    protected $guarded = [];


    protected $casts = [
        'duration' => StayDuration::class,
        'maka-images' => 'array',
        'madina-images' => 'array',
        'events' => 'array',
        'flight-stops' => 'array',
        'program_includes' => 'array',
        'general_notes' => 'array',
        'required_papers' => 'array',
        'cancelation_policy' => 'array',
        'external_visas' => 'array',
        'notes' => 'array',
        'dates' => 'array',
    ];

    public function umrahPrices(): HasMany
    {
        return $this->hasMany(UmrahPrice::class, 'umrah_package_id');
    }

    public function umrahBookings(): HasMany
    {
        return $this->hasMany(UmrahBooking::class, 'umrah_package_id');
    }

    public function makaHotel()
    {
        return $this->belongsTo(Hotel::class, 'maka_hotel_id');
    }

    public function madinaHotel()
    {
        return $this->belongsTo(Hotel::class, 'madina_hotel_id');
    }
}
