<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    
    protected $fillable = ['name', 'email', 'phone', 'user_id'];

    /*
    * [@name]
    ** Description: 
    * [return]
    * [data]
    */

    public function user() {
        return $this->belongsTo(User::class);
    }
}
