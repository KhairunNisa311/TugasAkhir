<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 'tugas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'subject',
        'pdf',
        'mapel_id',
        'pertemuan_id'
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    public function pertemuan()
    {
        return $this->belongsTo(Pertemuan::class);
    }
}
