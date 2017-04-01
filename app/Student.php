<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use Searchable;
    public $fillable = ['name','description', 'graduated', 'age'];
}
