<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;
use App\Models\Sistem\ActivityLog;
use App\Models\Keuangan\Pemasukan;
use App\Models\Keuangan\Pengeluaran;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasRoles, HasApiTokens;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_url',
        'no_hp',
        'alamat',
        'is_active',
        'last_login_at',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
            'last_login_at' => 'datetime',
        ];
    }

    public function pemasukanDibuat()
    {
        return $this->hasMany(
            Pemasukan::class,
            'created_by'
        );
    }

    public function pengeluaranDibuat()
    {
        return $this->hasMany(
            Pengeluaran::class,
            'created_by'
        );
    }

    public function aktivitas()
    {
        return $this->hasMany(
            ActivityLog::class,
            'causer_id'
        );
    }
}
