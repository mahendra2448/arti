<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Approach extends Model
{
    use HasFactory;

    protected $table = "t__approaches"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'actres_desc',
        'capbuild_desc'
    ];
}
