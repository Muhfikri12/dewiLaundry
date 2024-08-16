<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advantages extends Model
{
    use HasFactory;

    protected $table = 'advantages';

    protected $fillable = ['title', 'description'];
}
