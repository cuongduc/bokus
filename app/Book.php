<?php namespace bokus;

/**
 * author: duccuongict
 */

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

    /**
     * The table used by the model
     * @var string
     */
	protected $table = 'books';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [ 'isbn-13', 'isbn-11', 'published_date', 'publisher', 'pages', 'version'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function products()
    {
        return $this->morphMany('bokus\Product', 'productable');
    }

    /**
     * A book can have several formats
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formats()
    {
        return $this->hasMany('bokus\BookFormat');
    }

}
