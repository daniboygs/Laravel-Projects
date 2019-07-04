<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['id_book','name','author','published_date','availabre','id_user'];
    public $incrementing = false;
    protected $primaryKey='id_book';
}
