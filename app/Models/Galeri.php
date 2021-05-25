<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeri extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'galeri';
    protected $primaryKey = 'id_gambar';

    protected $fillable = [
        'id_wisata',
        'gambar'
    ];

    protected $hidden = [

    ];

    public function wisata(){
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }
}
