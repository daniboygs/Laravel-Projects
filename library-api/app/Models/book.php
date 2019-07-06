<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['id_book','name','author','published_date','available','id_category'];
    public $incrementing = false;
    protected $primaryKey='id_book';

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

}

