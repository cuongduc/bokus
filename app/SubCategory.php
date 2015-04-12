<?php namespace bokus;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {

	protected $table = 'sub_categories';

	protected $fillable = ['name', 'slug', 'book_count', 'category_id'];

	protected $rules = [
		'name:between:3,255',
		'slug:unique'
	];

	public function rules()
	{
		return $this->rules;
	}

	public function category()
	{
		return $this->belongsTo('bokus\Category');
	}
}
