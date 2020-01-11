<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        return "/storage/" . (($this->image) ? $this->image : "profile/Ky4SUkQylS3jMPLtZTjlAih2NZze41w0y1BeTo71.png");
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}