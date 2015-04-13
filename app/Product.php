<?php namespace bokus;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

class Product extends Model {

    /**
     * The table used by the model.
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'description',
        'slug', 'quantity', 'status',
        'weight', 'dimension_unit',
        'width', 'length', 'height', 'max_per_order',
        'min_per_order', 'price', 'price_unit',
        'avatar', 'main_image', 'total_votes', 'average_score', 'discount_id'
    ];

    /**
     * The rules used for model validation.
     * @var array
     */
    protected $rules = [
        'code:required',
        'name:min:3|required|alpha_dash',
        'slug:max:255|required|unique:products',
        'quantity:required|min:0|unsigned',
        'status:required|default:0',
        'price:required|min:0',
    ];

    /**
     * Get the validation rules of model.
     * @return array
     */
    public function rules()
    {
        return $this->rules;
    }


    /**
     * At a given time, a product might have only 1 discount
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function discount()
    {
        return $this->belongsTo('bokus\Discount');
    }

    /**
     * Add a vote for product
     *
     * @return void
     */
    public function addOneVote($sc)
    {
        $scores = $this->total_votes * $this->average_score;

        $this->total_votes++;

        $scores += $sc;

        $this->average_score = $scores / $this->total_votes;
    }

    /**
     * Polymorphic relationship - products can be of many types
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function productable()
    {
        return $this->morphTo();
    }

    /**
     * Get the status of product
     * @return mixed
     */
    public function getStatus()
    {
        switch ($this->status) {
            case 0:
                return Lang::get('product.available');
            break;
            case 1:
                return Lang::get('product.unavailable');
            break;
            case 2:
                return Lang::get('product.upcoming');
            break;
        }
    }

    /**
     * Set the status of product
     * @param $stt
     */
    public function setStatus($stt)
    {
        switch ($stt)
        {
            case 'available':
                $this->status = 0;
                break;
            case 'unvailable':
                $this->status = 1;
                break;
            case 'upcoming':
                $this->status = 2;
                break;
        }
    }
}
