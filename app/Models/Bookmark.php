<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookmark extends Model
{
    protected $guarded = ['id'];

    public function script()
    {
        return $this->belongsTo(Script::class);
    }

}
