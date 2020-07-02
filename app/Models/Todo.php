<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Todo extends Model
{
    protected $fillable =
    [
        'name','complete','delete','user_id'
    ];


    public function user(){
		return $this->belongsTo(User::class);
	}
}
