<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['id_book','name','author','publisher_date','fk_id_category','fk_id_user'];
    public $incrementing = false;
    protected $primaryKey='id_book';
}
