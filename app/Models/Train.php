<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    // Se non la prende di default perchè non ho messo il plurale, inserire il nome specifico della table
    protected $table = 'orders_trains';
}
