<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMission extends Model
{
    use HasFactory;

    protected $table = 'visi_missions';
    protected $fillable = ['vision', 'mission'];
}
