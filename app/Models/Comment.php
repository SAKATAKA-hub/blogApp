<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    #----------------------------------------------
    # シーダー用設定
    #----------------------------------------------
    use HasFactory;
    public $timestamps = false; //timesatampを利用しない

    protected $fillable = [
        'post_id',
        'body',
    ];

}
