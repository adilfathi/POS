<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BarangModel extends Model
{  use HasFactory;
    public $table = "m_barang";
    protected $primaryKey = "barang_id";
    public $timestamps = false;

    protected $fillable = [
        'kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual', 'image'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, "kategori_id", "kategori_nama");
    }
    protected function image(): Attribute {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}


