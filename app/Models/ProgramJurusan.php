<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgramJurusan extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the rombels for the ProgramJurusan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rombels(): HasMany
    {
        return $this->hasMany(Rombel::class);
    }
}
