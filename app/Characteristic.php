<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
      


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'class', 'crew', 'image', 'value', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];


    public function armament()
    {
        return $this->hasMany('App\Armament');
    }
}