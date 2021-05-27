<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';

    protected $fillable = [
        'id_wisata',
        'nama_kegiatan',
        'tanggal',
        'gambara',
        'gambarb',
        'gambarc',
        'gambard',
        'deskripsi'
    ];

    protected $hidden = [

    ];

    public function wisata(){
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }
}
