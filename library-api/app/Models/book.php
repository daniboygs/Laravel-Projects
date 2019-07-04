<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['id_book','name','author','publisher_date','availabre','fk_id_category','fk_id_user'];
    protected $primaryKey='id_book';
}
