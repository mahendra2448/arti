<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Footer extends Model
{
    use HasFactory;

    protected $table = "t__footers"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'address',
        'email',
        'fb',
        'ig'
    ];
}
