<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_ContactMsgs extends Model
{
    use HasFactory;

    protected $table = "t__contact_msgs"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'name',
        'email',
        'message'
    ];
}
