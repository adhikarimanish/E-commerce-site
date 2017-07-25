<?php

namespace App;

use App\user;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [

    'name',

    ];

	public function user()
	{
		return $this->belongsTo(user::class);
	}

}
