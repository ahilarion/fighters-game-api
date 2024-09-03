<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 */
class Ability extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'attack',
        'health',
        'defense',
        'dodge',
        'strength',
        'dexterity',
        'constitution',
        'intelligence',
    ];

    public function character() : BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
