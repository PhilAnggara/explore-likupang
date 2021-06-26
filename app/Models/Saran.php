<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Saran extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'saran';
    protected $primaryKey = 'id_saran';

    protected $fillable = [
        'id_wisata',
        'nama',
        'saran',
        'foto'
    ];

    protected $hidden = [

    ];

    // public function user(){
    //     return $this->belongsTo(User::class, 'id_user', 'id');
    // }
    public function wisata(){
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }
}
