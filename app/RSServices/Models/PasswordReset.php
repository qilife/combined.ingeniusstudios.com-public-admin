<?php

namespace App\RSServices\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
	protected $table = 'password_resets';
	protected $primaryKey = 'email';
	// protected $guarded = [];
	// protected $hidden = ['id'];
	protected $fillable = ['email', 'token', 'code'];
    public $timestamps = false;
}
