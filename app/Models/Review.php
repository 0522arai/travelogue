<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Favorite;

class Review extends Model
{
    use HasFactory;
    
    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }
    
    public function isLikeBy($user): bool {
        return Favorite::where('user_id', $user->id)->where('review_id', $this->id)->first() !==null;
    }
}
