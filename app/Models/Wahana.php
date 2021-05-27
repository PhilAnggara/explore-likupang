<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wahana extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'wahana';
    protected $primaryKey = 'id_wahana';

    protected $fillable = [
        'id_wisata',
        'nama_wahana',
        'harga',
        'gambara',
        'gambarb',
        'deskripsi'
    ];

    protected $hidden = [

    ];

    public function wisata(){
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }
}
