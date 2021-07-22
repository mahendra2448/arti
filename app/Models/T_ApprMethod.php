<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_ApprMethod extends Model
{
    use HasFactory;

    protected $table = "t__appr_methods"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'name',
        'desc',
        'image'
    ];
}
