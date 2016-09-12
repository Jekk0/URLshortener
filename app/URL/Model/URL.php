<?php

namespace App\URL\Model;

use Illuminate\Database\Eloquent\Model;

class URL extends Model
{
    protected $table ='u_r_ls';

    protected $fillable=[
        'url',
        'hash'
    ];
}
