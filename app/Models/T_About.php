<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_About extends Model
{
    use HasFactory;

    protected $table = "t__abouts"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'abt_desc',
        'abt_image'
    ];
}
