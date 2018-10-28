<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
       //table name
       protected $table  = 'book';
       //primary key
       public $primaryKey= 'invoiceno';
       //time stamp
       public $timestamps= 'true';

}
