<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['title', 'files', 'tags'];
    protected $casts = [
        'files' => 'array',
        'tags' => 'array',
    ];

    public function scopeByAge(Builder $query) : Builder
    {
        return $query->orderBy('updated_at', 'desc');
    }
}
