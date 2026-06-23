<?php

namespace App\Models\Keuangan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriPemasukan extends Model
{
    use SoftDeletes;

    protected $table = 'kategori_pemasukan';

    protected $fillable = [
        'nama',
        'deskripsi',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function pemasukan()
    {
        return $this->hasMany(
            Pemasukan::class,
            'kategori_pemasukan_id'
        );
    }
}