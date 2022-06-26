<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * @return HasOne
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class, 'user_id');
    }

    /**
     * @return HasOne
     */
    public function skill(): HasOne
    {
        return $this->hasOne(Skill::class, 'user_id');
    }

    /**
     * @return BelongsToMany
     */
    public function experiences(): BelongsToMany
    {
        return $this->belongsToMany(Experience::class, 'experience_user', 'user_id', 'experience_id');
    }

    /**
     * @return BelongsToMany
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_user', 'user_id', 'project_id');
    }

    /**
     * @return BelongsToMany
     */
    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(Activity::class, 'activity_user', 'user_id', 'activity_id');
    }

    /**
     * @return BelongsToMany
     */
    public function testimonials(): BelongsToMany
    {
        return $this->belongsToMany(Testimonial::class, 'testimonial_user', 'user_id', 'testimonial_id');
    }

    /**
     * @return HasOne
     */
    public function contact(): HasOne
    {
        return $this->hasOne(Contact::class, 'user_id');
    }

    /**
     * @return bool
     */
    public static function checkProjectStatuses(): bool
    {
        $projects = Project::all();

        if ($projects->every(fn($project) => $project->public === 0)) {
            return true;
        }

        return false;
    }

    public function getAvatar()
    {
        $firstCharacter = $this->email[0];

        $integerToUse = is_numeric($firstCharacter) ? ord(strtolower($firstCharacter)) - 21 : ord(strtolower($firstCharacter)) - 96;

        return 'https://www.gravatar.com/avatar/'
        .md5($this->email)
        .'?s=100'
        .'&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-'
        .$integerToUse
        .'.png';
    }

    public static function boot()
    {
        parent::boot();

        static::created(function($model){

            $slugName = str($model->name)->slug()->__toString();

            $model->profile()->create([
                'user_id' => $model->id,
                'portfolio_name' => null,
                'slug' => $slugName,
                'portfolio_email' => null,
                'total_clients' => 0,
                'total_tools' => 0,
                'settings' => [
                    'public' => false,
                    'dark_mode' => true,
                    'track_views' => true,
                    'track_likes' => true,
                ]
            ]);
        });

        static::updated(function($model){

            $slugName = str($model->name)->slug()->__toString();

            $model->profile()->update([
                'slug' => $slugName,
            ]);
        });
    }
}
