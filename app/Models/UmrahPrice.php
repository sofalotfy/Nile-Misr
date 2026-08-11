<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UmrahPrice extends Model
{
    protected $guarded = [];

    public function umrahPackage(): BelongsTo
    {
        return $this->belongsTo(UmrahPackages::class, 'umrah_package_id');
    }

    public function umrahBookings(): HasMany
    {
        return $this->hasMany(UmrahBooking::class, 'umrah_price_id');
    }
}
