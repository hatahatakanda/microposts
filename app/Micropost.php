<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favorites_user()
    {
        return $this->belongsToMany(User::class, 'favorite', 'user_id', 'micropost_id')->withTimestamps();
    }
}
