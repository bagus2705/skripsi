<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Script extends Model
{
    use Sluggable, HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $with = ['category'];
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('detail', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(isset($filters['lokasi']), function ($query) use ($filters) {
            return $filters['lokasi'] === 'null'
                ? $query->whereNull('lokasi')
                : $query->where('lokasi', $filters['lokasi']);
        });

        $query->when(isset($filters['tahun']), function ($query) use ($filters) {
            return $filters['tahun'] === 'null'
                ? $query->whereNull('tahun')
                : $query->where('tahun', $filters['tahun']);
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


    public function bookmarks()
    {
        return $this->BelongsToMany(User::class, 'bookmarks');
    }
}
