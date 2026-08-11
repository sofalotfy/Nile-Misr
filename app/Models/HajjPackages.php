<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Enums\HajjPackageDuration;
use App\Enums\HajjPackageLevel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HajjPackages extends Model
{
    protected $table = 'hajj_packages';

    protected $guarded = [];

    protected $casts = [
        'level' => HajjPackageLevel::class,
        'duration' => HajjPackageDuration::class,
        'events' => 'array',
        'flight-stops' => 'array',
        'notes' => 'array',
    ];

    public function hajjPrices(): HasMany
    {
        return $this->hasMany(HajjPrice::class, 'hajj_package_id');
    }

    public function hajjBookings(): HasMany
    {
        return $this->hasMany(HajjBooking::class, 'hajj_package_id');
    }
}
