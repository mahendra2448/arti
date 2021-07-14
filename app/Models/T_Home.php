<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Home extends Model
{
    use HasFactory;

    protected $table = "t__homes"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'heading_text',
        'caption',
        'image'
    ];
}
