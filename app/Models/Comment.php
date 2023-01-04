<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

 
    // this array is needed for form submission
    // it is a security mesure of Laravel to define only the 
    // fields you will save. 
    protected $fillable = ['body','post_id','user_id'];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
