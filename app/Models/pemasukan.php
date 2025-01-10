<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemasukan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_setoran';

    protected $fillable = [
        'id_siswa',
        'tanggal',
        'jumlah',
        'keterangan',
    ];
}
