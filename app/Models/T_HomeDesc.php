<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_HomeDesc extends Model
{
    use HasFactory;

    protected $table = "t__home_descs"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'desc_one',
        'desc_two'
    ];
}
