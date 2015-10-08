<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company';
    /**
     * The primary key of the table
     *
     * @var string
     */
    protected $primaryKey = 'company_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'website', 'email', 'phone', 'address1', 'address2', 'city', 'state', 'country'];

}
