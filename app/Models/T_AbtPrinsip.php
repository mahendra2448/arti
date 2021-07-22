<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_AbtPrinsip extends Model
{
    use HasFactory;

    protected $table = "t__abt_prinsips"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'name',
    ];
}
