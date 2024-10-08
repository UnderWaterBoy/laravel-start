<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $attributes =[
      'admin'=> false,
      'active' => true,
    ];

    protected $fillable = [
        'name',
        'avatar',
        'email',
        'active',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getAvatarAttribute($value)
    {
        return asset('storage/avatars/' . $value);
    }

    public function setAvatarAttribute($value)
    {
        $filename = time() . '.' . $value->getClientOriginalExtension();
        $value->storeAs('avatars', $filename, 'public');
        $this->attributes['avatar'] = $filename;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
