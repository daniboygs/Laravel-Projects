<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = ['id_user','id_book'];
    public $incrementing = true;
    protected $primaryKey='id_borrow';
}
