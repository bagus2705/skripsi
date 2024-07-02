<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Script extends Model
{
    use Sluggable, HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('detail', 'like', '%' . $search . '%')
                ->orWhere('transkrip', 'like', '%' . $search . '%')
                ->orWhere('translasi', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['pengarang'] ?? false, function ($query, $pengarang) {
            return $query->where('pengarang', $pengarang);
        });

        $query->when(isset($filters['lokasi_ditemukan']), function ($query) use ($filters) {
            return $filters['lokasi_ditemukan'] === 'null'
                ? $query->whereNull('lokasi_ditemukan')
                : $query->where('lokasi_ditemukan', $filters['lokasi_ditemukan']);
        });

        $query->when(isset($filters['tahun_ditemukan']), function ($query) use ($filters) {
            return $filters['tahun_ditemukan'] === 'null'
                ? $query->whereNull('tahun_ditemukan')
                : $query->where('tahun_ditemukan', $filters['tahun_ditemukan']);
        });

        $query->when(isset($filters['bahasa']), function ($query) use ($filters) {
            return $filters['bahasa'] === 'null'
                ? $query->whereNull('bahasa')
                : $query->where('bahasa', $filters['bahasa']);
        });
    }



    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
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

