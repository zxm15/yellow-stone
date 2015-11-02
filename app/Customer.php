<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customer';
    /**
     * The primary key of the table
     *
     * @var string
     */
    protected $primaryKey = 'customer_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address1', 'address2', 'city', 'state', 'zip', 'country', 'birthday', 'gender', 'occupation', 'race'];



}
