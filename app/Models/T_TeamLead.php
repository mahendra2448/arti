<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_TeamLead extends Model
{
    use HasFactory;

    protected $table = "t__team_leads"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'name',
        'surname',
        'desc',
        'image'
    ];
}
