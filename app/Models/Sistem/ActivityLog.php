<?php

namespace App\Models\Sistem;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Spatie\Activitylog\Models\Activity;

class ActivityLog extends Activity
{
    protected $table = 'activity_log';

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'causer_id'
        );
    }

    public function model()
    {
        return $this->morphTo(
            __FUNCTION__,
            'subject_type',
            'subject_id'
        );
    }

    public function getSebelumAttribute(): array
    {
        return $this->properties['old'] ?? [];
    }

    public function getSesudahAttribute(): array
    {
        return $this->properties['attributes'] ?? [];
    }
}