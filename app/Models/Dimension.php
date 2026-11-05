<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dimension extends Model
{
    protected $fillable = ['slug', 'name', 'color', 'intro', 'sort', 'research_rank'];

    public const COLORS = [
        'green'  => ['#4fa58f', '#dcefe9'],
        'yellow' => ['#f2b632', '#fdf0cf'],
        'pink'   => ['#e0617f', '#fbdfe7'],
        'red'    => ['#c8403d', '#f6dad9'],
        'blue'   => ['#2f4a78', '#d9e0ee'],
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class)->orderBy('sort');
    }

    public function getHexAttribute(): string
    {
        return self::COLORS[$this->color][0];
    }

    public function getSoftAttribute(): string
    {
        return self::COLORS[$this->color][1];
    }

    public function getIconAttribute(): string
    {
        return $this->slug;
    }
}