<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Retailer extends Model
{
    use HasFactory;
    /**
     * Get the distributor that owns the retailer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function distributor(): BelongsTo
    {
        return $this->belongsTo(Distributor::class,);
    }
}
