<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    //
    protected $table = 'karyawan';

    // Kolom yang dapat diisi
    protected $fillable = ['nip', 'nama_pegawai', 'no_hp', 'email', 'status', 'jabatan'];
}
