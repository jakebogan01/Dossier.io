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
        'created_at' => 'date',
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'updated',
        'type_updated',
    ];

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function serializeDate(DateTimeInterface $date)
    {
        return $date->format('F j, g:i');
    }
}
