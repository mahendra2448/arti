<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_HomeTesti extends Model
{
    use HasFactory;

    protected $table = "t__home_testis"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'name',
        'position',
        'desc'
    ];
}
