<?php namespace bokus;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $table = 'comments';

    protected $fillable = [

    ];

    protected $rules = [
        'title:required|min:5|alpha_num'
    ];

}
