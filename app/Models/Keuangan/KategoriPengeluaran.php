<?php

namespace App\Models\Keuangan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriPengeluaran extends Model
{
    use SoftDeletes;

    protected $table = 'kategori_pengeluaran';

    protected $fillable = [
        'nama',
        'deskripsi',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function pengeluaran()
    {
        return $this->hasMany(
            Pengeluaran::class,
            'kategori_pengeluaran_id'
        );
    }
}