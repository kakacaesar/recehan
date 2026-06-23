<?php

namespace App\Models\Keuangan;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasActivityLog;

class Pengeluaran extends Model
{
    use SoftDeletes;
    use HasActivityLog;

    protected $table = 'pengeluaran';

    protected $fillable = [
        'nomor_transaksi',
        'tanggal',
        'kategori_pengeluaran_id',
        'jumlah',
        'tujuan',
        'status',
        'keterangan',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jumlah' => 'decimal:2',
    ];

    public function kategori()
    {
        return $this->belongsTo(
            KategoriPengeluaran::class,
            'kategori_pengeluaran_id'
        );
    }

    public function creator()
    {
        return $this->belongsTo(
            User::class,
            'created_by'
        );
    }

    public function updater()
    {
        return $this->belongsTo(
            User::class,
            'updated_by'
        );
    }
}