<?php

namespace App\Models;

use App\Models\Script;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Kategori extends Model
{
    use Sluggable;
    protected $guarded = ['id'];
    public function posts()
    {
        return $this->hasMany(Script::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
