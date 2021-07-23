<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_ContactPub extends Model
{
    use HasFactory;

    protected $table = "t__contact_pubs"; //nama tabelnya emang pake 's'
    protected $fillable  = [
        'title',
        'email'
    ];
}
