<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Block extends Model
{
    protected $fillable = ['name', 'description', 'step'];

    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class);
    }
}
