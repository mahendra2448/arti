<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Publikasi extends Model
{
    use HasFactory;

    protected $table = "t__publikasis"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'title',
        'year_desc',
        'by'
    ];
}
