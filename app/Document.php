<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Document extends Model
{
    protected $fillable = [
        'name',
        'description',
        'link',
        'author',
        'approved',
        'version',
        'peoples'
    ];

    public function blocks(): BelongsToMany
    {
        return $this->belongsToMany(Block::class);
    }

    public function records(): HasMany
    {
        return $this->hasMany(Record::class);
    }
}
