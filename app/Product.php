<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';
    /**
     * The primary key of the table
     *
     * @var string
     */
    protected $primaryKey = 'product_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'name', 'category'];
}
