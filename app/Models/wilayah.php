<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
    use HasFactory;

    public $timestamps  = false;

    protected $guarded  = [
        'id'
    ];

    protected $table = 'wilayah';
    
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa');
    }
}
