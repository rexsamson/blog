<?php

namespace main;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            $imagePath = public_path() . "/img/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("img/" . $this->image);
        }

        return $imageUrl;
    }
    public function getDateHumanAttribute($value)
    {
        return $this->created_at->diffForHumans();
    }

    public function scopeLatestFirst($query)
    {
        return  $this->orderBy('created_at', 'desc');
    }
}
