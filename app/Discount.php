<?php namespace bokus;

/*
 * author: duccuongict
 */

use Illuminate\Database\Eloquent\Model;

class Discount extends Model {

    /**
     * The table used by the model.
     * @var string
     */
	protected $table = 'discounts';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'type', 'code', 'start', 'end', 'description',
        'flat_amount', 'percent_amount', 'published_at',
        'used_times', 'minimum_product'
    ];

    /**
     * The rules for model validation
     * @var array
     */
    protected $rules = [
        'flat_amount:numeric|min:0',
        'percent_amount:numeric|min:0',
    ];

    public function rules()
    {
        return $this->rules;
    }

    public function products()
    {
        return $this->hasMany('bokus\Product','discount_id', 'id');
    }

    /**
     * Increase the used times of discount model instance
     * @return void
     */
    public function used()
    {
        $this->used_times++;
    }
}
