<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ["username", "password", "name", "profile_image", "phone"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function admin_notification()
    {
        return $this->hasMany(admin_notification::class, "notifiable_id");
    }

    public function response()
    {
        return $this->hasMany(response::class, "admin_id");
    }
}
