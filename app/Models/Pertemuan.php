<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    protected $table = 'pertemuans';
    protected $primaryKey='id';

    protected $fillable = [
        'subject',
        'pdf',
        'mapel_id'
    ];

    public function mapel(){
        return $this->belongsTo(Mapel::class);
    
    }
}
