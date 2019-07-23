<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logcategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function logs(){
        return $this->hasMany(Log::class) ;
    }
}
