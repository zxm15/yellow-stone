<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_options';
    /**
     * The primary key of the table
     *
     * @var string
     */
    protected $primaryKey = 'product_options_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'product_id', 'name', 'size', 'color', 'sku', 'price', 'shipping_price', 'cost', 'description', 'image', 'advertisement'];

}
