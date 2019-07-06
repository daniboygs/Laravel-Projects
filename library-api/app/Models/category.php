<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id_category','name','description','manybooks'];
    public $incrementing = true;
    protected $primaryKey='id_category';

    public function book()
    {
        return $this->hasMany(Book::class, 'id_category', 'id_category');
    }
}
