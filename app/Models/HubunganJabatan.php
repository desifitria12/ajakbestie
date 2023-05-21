<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HubunganJabatan extends Model
{
    use HasFactory;

    protected $table = 'hubungan_jabatan';
    // protected $fillable = ['nama_dinas'];
    protected $guarded = NULL;
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('kode_jabatan', 'like', '%' . request('search') . '%')->orwhereHas('datajabatan', function ($query) {
                return $query->where('nama_jabatan',  'like', '%' . request('search') . '%');
            })->orwhereHas('standarkompetensi', function ($query) {
                return $query->where('kelompok_jabatan',  'like', '%' . request('search') . '%');
            });
        });
    }
    public function detaildinas()
    {
        return $this->hasOne(Dinas::class, 'id', 'dinas_id');
    }
    public function datajabatan()
    {
        return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
    }
    public function datafaktor()
    {
        return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
    }
    public function data_parent()
    {
        return $this->hasMany(HubunganJabatanParent::class, 'parent_jabatan', 'kode_jabatan');
    }
    public function data_tugas_pokok()
    {
        return $this->hasMany(TugasPokok::class, 'jabatan_id', 'jabatan_id');
    }
    public function data_bahan_kerja()
    {
        return $this->hasMany(BahanKerja::class, 'jabatan_id', 'jabatan_id');
    }
    public function data_perangkat_kerja()
    {
        return $this->hasMany(PerangkatKerja::class, 'jabatan_id', 'jabatan_id');
    }
    public function data_beban_kerja()
    {
        return $this->hasMany(BebanKerjaModel::class, 'kode_jabatan', 'kode_jabatan');
    }

    public function data_biodata()
    {
        return $this->hasMany(BiodataJabatanModel::class, 'kode_jabatan', 'kode_jabatan');
    }
    
    public function data_korelasi()
    {
        return $this->hasMany(KorelasiJabatanModel::class, 'kode_jabatan', 'kode_jabatan');
    }
    public function data_lingkungan()
    {
        return $this->hasOne(LingkunganKerja::class, 'jabatan_id', 'jabatan_id');
    }
    public function data_syarat()
    {
        return $this->hasOne(SyaratKerja::class, 'jabatan_id', 'jabatan_id');
    }
    public function data_faktor()
    {
        return $this->hasMany(Faktor::class, 'jabatan_id', 'jabatan_id');
    }
    public function data_kompetensi()
    {
        return $this->hasMany(Kompetensi::class, 'jabatan_id', 'jabatan_id');
    }
    public function kompetensi_teknis()
    {
        return $this->hasMany(KompetensiTeknisModel::class, 'kode_jabatan', 'kode_jabatan');
    }
    public function standarkompetensi()
    {
        return $this->hasOne(StandarKompetensi::class, 'jabatan_id', 'jabatan_id');
    }

    public static function getHierarchy($dinasId)
    {
        $jabatans = self::with('datajabatan')
                    ->where('dinas_id', $dinasId)
                    ->get();
        
        // Turn the collection into an associative array where the key is jabatan_id and the value is the model itself
        $jabatans = $jabatans->keyBy('jabatan_id');

        // filter root nodes (nodes without a parent)
        $roots = $jabatans->filter(function($item) {
            return is_null($item['following_jabatan_id']);
        });

        // only iterate over the root nodes
        return $roots->mapWithKeys(function($item) use ($jabatans) {
            return [$item->datajabatan->nama_jabatan => self::getChildren($item->jabatan_id, $jabatans)];
        })->toArray();
    }

    public static function getChildren($parentId, $jabatans)
    {
        $children = $jabatans->filter(function($item) use ($parentId) {
            return $item['following_jabatan_id'] == $parentId;
        });

        return $children->mapWithKeys(function($child) use ($jabatans) {
            return [$child->datajabatan->nama_jabatan => self::getChildren($child->jabatan_id, $jabatans)];
        })->toArray();
    }
    
    // public function data_child()
    // {
    //     return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
    // }
}
