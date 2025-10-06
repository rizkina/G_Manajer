<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrangTua extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function pekerjaan(): BelongsTo
    {
        return $this->belongsTo(RefPekerjaan::class, 'ref_pekerjaan_id');
    }

    public function penghasilan(): BelongsTo
    {
        return $this->belongsTo(RefPenghasilan::class, 'ref_penghasilan_id');
    }

    public function pendidikan(): BelongsTo
    {
        return $this->belongsTo(RefPendidikan::class, 'ref_pendidikan_id');
    }
}
