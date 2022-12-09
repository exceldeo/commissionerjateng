<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'alamat',
        'telepon',
        'fax',
        'email',
    ];
}
