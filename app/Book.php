<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fill = array('id', 'title', 'author','description', 'reference' , 'publication_year');
}
