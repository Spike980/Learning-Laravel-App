<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    protected $fillable = [
                        'name',
                        'description'
                        ];


    public function tasks() 
    {
        return $this->hasMany('App\Task');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
