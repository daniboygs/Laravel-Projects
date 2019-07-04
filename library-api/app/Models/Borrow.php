<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = ['id_borrow','id_user','id_book'];
    public $incrementing = true;
    protected $primaryKey='id_borrow';
}
