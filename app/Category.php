<?php namespace bokus;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	/**
	 * The database table used by the model
	 * 
	 * @var string
	 */
	protected $table = 'categories';

	/**
	 * The attributes that are mass assignable
	 * 	
	 * @var array
	 */
	protected $fillable = ['name', 'slug'];

	protected $rules = [
		'name:between:3,255',
		'slug:unique'
	];


	/**
	 * Get rules for model validation
	 * @return array
	 */
	public function rules()
	{
		return $this->rules;
	}


	public function subCategories()
	{
		return $this->hasMany('bokus\SubCategory');
	}

}
