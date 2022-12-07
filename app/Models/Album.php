<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'albums';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['category_id', 'name', 'benefits', 'tags', 'audio_folder', 'image', 'order', 'is_active', 'is_free'];
    protected $hidden = ['created_at', 'benefits', 'tags', /*'audio_folder',*/ 'is_active'];
    // protected $dates = [];
    protected $casts = ['updated_at' => 'timestamp'];
    protected $appends = ['descriptions', /*'url',*/ 'tag'];
    protected $with = ['tracks'];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag', 'album_tag', 'album_id', 'tag_id');
    }

    public function tracks() {
        return $this->hasMany('App\Models\Track', 'album_id');//->orderBy('order');
		
    }

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

    public function getDescriptionsAttribute($value) {
        return json_decode($this->benefits);
    }

    // public function getUrlAttribute($value) {
    //     $folder = empty($this->audio_folder) ? '' : $this->audio_folder . '/';
    //     return env('APP_STORAGE_URL') . $folder;
    // }

    public function getTagAttribute($value) {
        return $this->tags->pluck('id');
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
