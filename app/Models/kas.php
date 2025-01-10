<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kas';

    protected $fillable = [
        'tanggal',
        'jenis_transaksi',
        'jumlah',
        'keterangan',
        'id_user',
    ];

}
