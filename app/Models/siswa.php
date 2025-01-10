<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'nama_siswa',
        'kelas',
        'nis',
        'id_user',
    ];


}
