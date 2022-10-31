<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapels';
    protected $primaryKey = 'id';

    protected $fillable = [
        'mapel',
        'kelas_id',
        'harga'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function pertemuan()
    {
        return $this->hasMany(Pertemuan::class);
    }
}
