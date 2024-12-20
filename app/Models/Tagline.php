<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagline extends Model
{
    use HasFactory;

    protected $table = 'taglines';
    protected $fillable = ['title', 'description'];
}
