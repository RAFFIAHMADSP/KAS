<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pengeluaran';

    protected $fillable = [
        'tanggal',
        'jumlah',
        'keterangan',
        'id_user',
    ];
}
