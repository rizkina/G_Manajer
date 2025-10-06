<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tingkat extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the rombels for the Tingkat
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rombels(): HasMany
    {
        return $this->hasMany(Rombel::class);
    }
}
