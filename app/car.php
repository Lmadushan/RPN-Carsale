<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    //Table Name
    protected $table = 'cars';
    //Primary Key
    public $primaryKey = 'id';
    //Time stamps
    public $timestamps = true;
}
