<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lists extends Model
{
    protected $table = "lists";
    protected $primaryKey = "id";

    protected $guarded = [];
    protected $dates = [
        'created_at', 'updated_at'
    ];
}
