<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    use HasFactory;



    /**
     * Get the user that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

// /**
//  * Get all of the carts for the Payment
//  *
//  * @return \Illuminate\Database\Eloquent\Relations\HasMany
//  */
// public function carts(): HasMany
// {
//     return $this->hasMany(Cart::class);
// }

}