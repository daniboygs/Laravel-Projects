<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['id_category','name','description','manybooks'];
    public $incrementing = true;
    protected $primaryKey='id_category';
}
