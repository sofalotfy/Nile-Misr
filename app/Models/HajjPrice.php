<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\RoomTypes;

class HajjPrice extends Model
{
    protected $guarded = [];

    protected $casts = [
        'type'  =>  RoomTypes::class,
    ];

    public function hajjPackage(): BelongsTo
    {
        return $this->belongsTo(HajjPackages::class, 'hajj_package_id');
    }

    public function hajjBookings(): HasMany
    {
        return $this->hasMany(HajjBooking::class, 'hajj_price_id');
    }
}
 