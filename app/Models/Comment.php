<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;


class Comment extends Model
{
    use SoftDeletes;
    use HasFactory;
    
 dev_basis09
    protected $dates = ['deleted_at'];
    
 master
    
    protected $fillable = [
        'comment',
        'user_id',
        'post_id',
    ];
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
        public function user()
    {
        return $this->belongsTo(User::class);
    }
}
