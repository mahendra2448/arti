<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_AbtVis extends Model
{
    use HasFactory;

    protected $table = "t__abt_vis"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'vis_desc',
        'vis_image'
    ];
}
