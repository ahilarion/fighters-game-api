<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static where(string $string, mixed $class)
 */
class Classes extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'display_name',
        'default_attack',
        'default_defense',
        'default_dodge',
        'default_strength',
        'default_dexterity',
        'default_constitution',
        'default_intelligence'
    ];

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
