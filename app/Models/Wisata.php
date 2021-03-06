<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wisata extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';

    protected $fillable = [
        'nama_wisata',
        'slug',
        'alamat',
        'lokasi',
        'jarak',
        'deskripsi',
        'kendaraan',
        'retribusi',
        'makanan',
        'populer'
    ];

    protected $hidden = [

    ];

    public function galeri(){
        return $this->hasMany(Galeri::class, 'id_wisata', 'id_wisata');
    }
    public function saran(){
        return $this->hasMany(Saran::class, 'id_wisata', 'id_wisata');
    }
    public function wahana(){
        return $this->hasMany(Wahana::class, 'id_wisata', 'id_wisata');
    }
    public function kegiatan(){
        return $this->hasMany(Kegiatan::class, 'id_wisata', 'id_wisata');
    }
}
