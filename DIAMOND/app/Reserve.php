<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    // table name
    protected $table = 'reserves';
    // Primery key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
