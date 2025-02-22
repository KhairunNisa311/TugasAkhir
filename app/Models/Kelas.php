<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'harga'
    ];

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
