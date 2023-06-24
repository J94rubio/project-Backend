<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = "books";
    protected $primariKey = "id";
    protected $fillable = ["name","isbn", "author", "edition", "title"];

}
