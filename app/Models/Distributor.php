<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Distributor extends Model
{
    use HasFactory;
    /**
     * Get the manufacturer that owns the distributor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'foreign_key', 'other_key');
    }
    /**
     * Get all of the comments for the distributor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function retailers(): HasMany
    {
        return $this->hasMany(Retailer::class, 'foreign_key', 'local_key');
    }
}
