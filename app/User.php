<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->profile()->create([
                'title' => $user->username,
                'image' => '/profile/default.jpg'
            ]);
        });
    }

    public function profile() {
        return $this->hasOne(Profile::class);
    }

    public function  posts() {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    public function following() {
        return $this->belongsToMany(Profile::class);
    }
}
