<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //1113追加 fillableの追加漏れで時間を食った
    protected $fillable = ['content' ,'status' , 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
