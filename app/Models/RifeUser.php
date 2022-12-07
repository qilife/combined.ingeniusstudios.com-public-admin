<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class RifeUser extends Authenticatable
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, Notifiable, HasApiTokens;
	
    protected $connection= 'rife';

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'created_at', 'uuid', 'os', 'is_active', 'is_admin'];
    protected $hidden = ['password', 'remember_token', 'email_verified_at', 'created_at', 'updated_at', 'roles', 'uuid', 'os'];
    protected $casts = ['email_verified_at' => 'datetime'];
    // protected $with = [];
    protected $appends = ['unlocked_tiers', 'unlocked_categories', 'unlocked_albums'];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

     public function tiers() {
        return $this->belongsToMany('App\Models\Tier', 'user_tier', 'user_id');
    }
	/*public function tier() {
        return $this->belongsToMany('App\Models\Tier', 'user_tier', 'user_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Models\Category', 'user_category', 'user_id');
    }

    public function albums() {
        return $this->belongsToMany('App\Models\Album', 'user_album', 'user_id');
    } */

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    // public function getRoleAttribute($value) {
    //     return $this->roles[0]->name;
    // }

    public function getOsNameAttribute($value) {
        if ($this->os == null) return 'Web';
        switch ($this->os) {
            case 0: return 'Android';
            case 1: return 'iOS';
            default: return 'Web';
        }
    }

    public function getUnlockedTiersAttribute($value) {
        return $this->tiers()->get()->pluck('id');
    }

    public function getUnlockedCategoriesAttribute($value) {
        return $this->categories()->get()->pluck('id');
    }

    public function getUnlockedAlbumsAttribute($value) {
        return $this->albums()->get()->pluck('id');
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    // public function setPasswordAttribute($value) {
    //     // if (!empty($this->attributes['email']) && !empty($this->attributes['password']) && \Auth::attempt(['email' => $this->attributes['email'], 'password' => $value])) {
    //     //     return;
    //     // }
    //     $this->attributes['password'] = bcrypt($value);
    // }
}
