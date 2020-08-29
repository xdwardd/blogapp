<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';

    // Primary key

    public $primaryKey = 'id';

    //time stamo

    public $timestamp = true;


    public function user(){
        return $this->belongsTo('App\User');
     }
}
