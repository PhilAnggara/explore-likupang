<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demografi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'demografi';

    protected $fillable = [
        'text'
    ];

    protected $hidden = [

    ];
}
