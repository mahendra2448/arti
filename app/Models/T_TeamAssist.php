<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_TeamAssist extends Model
{
    use HasFactory;

    protected $table = "t__team_assists"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'name',
        'surname',
        'image'
    ];
}
