<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    protected $fillable = ['dimension_id', 'type', 'source', 'methods', 'items', 'sort'];

    protected $casts = ['methods' => 'array', 'items' => 'array'];

    public const TITLES = [
        'bevindingen'        => 'Onderzocht / Bevindingen',
        'hiaten'             => 'Hiaten',
        'minimumstandaarden' => 'Minimumstandaarden',
    ];

    public function dimension(): BelongsTo
    {
        return $this->belongsTo(Dimension::class);
    }

    public function getTitleAttribute(): string
    {
        return self::TITLES[$this->type] ?? ucfirst($this->type);
    }
}
