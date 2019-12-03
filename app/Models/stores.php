<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;




class Stores extends Model
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'stores';
    protected $fillable = [
        'name'
    ];

}
