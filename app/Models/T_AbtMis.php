<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_AbtMis extends Model
{
    use HasFactory;

    protected $table = "t__abt_mis"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'mis_desc',
        'mis_image'
    ];
}
