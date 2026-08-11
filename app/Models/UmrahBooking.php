<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UmrahBooking extends Model
{
    protected $guarded = [];

    public function umrahPrice(): BelongsTo
    {
        return $this->belongsTo(UmrahPrice::class, 'umrah_price_id');
    }

    public function umrahPackage(): BelongsTo
    {
        return $this->belongsTo(UmrahPackages::class, 'umrah_package_id');
    }
}
