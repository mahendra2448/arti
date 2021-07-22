<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_AbtApproach extends Model
{
    use HasFactory;

    protected $table = "t__abt_approaches"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'title',
        'desc'
    ];
}
