<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Activity extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'section',
        'action',
    ];

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @param $date
     * @return string
     */
    public function serializeDate($date): string
    {
        return $date->format('F j, g:ia');
    }
}
