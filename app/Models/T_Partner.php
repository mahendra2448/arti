<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Partner extends Model
{
    use HasFactory;

    protected $table = "t__partners"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'name',
        'image'
    ];
}
