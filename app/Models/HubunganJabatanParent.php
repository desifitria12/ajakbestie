<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HubunganJabatanParent extends Model
{
    use HasFactory;

    protected $table = 'hubungan_jabatan_parent';
    // protected $fillable = ['nama_dinas'];
    protected $guarded = NULL;
    public function detailchild()
    {
        return $this->belongsTo(HubunganJabatan::class, 'child_jabatan', 'kode_jabatan');
    }
}
