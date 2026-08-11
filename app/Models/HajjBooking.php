<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HajjBooking extends Model
{
    protected $table = 'hajj_bookings';

    protected $guarded = [];

    public function hajjPrice(): BelongsTo
    {
        return $this->belongsTo(HajjPrice::class, 'hajj_price_id');
    }

    public function hajjPackage(): BelongsTo
    {
        return $this->belongsTo(HajjPackages::class, 'hajj_package_id');
    }
}
