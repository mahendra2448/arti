<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_HomeExp extends Model
{
    use HasFactory;

    protected $table = "t__home_exps"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'heading_text',
        'image'
    ];
}
