<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kurikulum extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the rombels for the Kurikulum
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rombels(): HasMany
    {
        return $this->hasMany(Rombel::class);
    }
}
