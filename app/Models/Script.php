<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Script extends Model
{
    use Sluggable, HasFactory;

    protected $guarded = ['id'];
    protected $with = ['kategori'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('detail', 'like', '%' . $search . '%')
                ->orWhere('transkrip', 'like', '%' . $search . '%')
                ->orWhere('translasi', 'like', '%' . $search . '%');
        });

        $query->when($filters['kategori'] ?? false, function ($query, $kategori) {
            return $query->whereHas('kategori', function ($query) use ($kategori) {
                $query->where('slug', $kategori);
            });
        });

        $query->when($filters['pengarang'] ?? false, function ($query, $pengarang) {
            return $query->where('pengarang', $pengarang);
        });

        $query->when($filters['lokasi_ditemukan'] ?? false, function ($query, $lokasi_ditemukan) {
            return $query->where('lokasi_ditemukan', $lokasi_ditemukan);
        });

        $query->when($filters['tahun_ditemukan'] ?? false, function ($query, $tahun_ditemukan) {
            return $query->where('tahun_ditemukan', $tahun_ditemukan);
        });

        $query->when($filters['bahasa'] ?? false, function ($query, $bahasa) {
            return $query->where('bahasa', $bahasa);
        });
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
