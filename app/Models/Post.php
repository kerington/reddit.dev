<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends BaseModel
{
    protected $table = "posts";

    public static $rules = [
	    'title' => 'required|max:50',
	    'url' => 'required|url',
	    'content' => 'required',
    ];

    public function user()
   	{
    	return $this->belongsTo('App\User', 'created_by');
	}

}

