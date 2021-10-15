<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

	protected $primaryKey = 'user_id';

	protected $fillable = ['user_first_name', 'user_last_name', 'user_email', 'user_password'];
	protected $hidden = ['user_password', 'remember_token'];
	protected $casts = ['email_verified_at' => 'datetime',];
}
