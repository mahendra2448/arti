<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Penelitian extends Model
{
    use HasFactory;

    protected $table = "t__penelitians"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'title',
        'year',
        'desc',
    ];
}
