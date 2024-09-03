<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static create(array $array)
 */
class Character extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'level',
        'experience',
        'attack',
        'defense',
        'dodge',
        'strength',
        'dexterity',
        'constitution',
        'intelligence',
        'user_id',
        'class_id',
        'ability_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function class(): HasOne
    {
        return $this->hasOne(Classes::class);
    }

    public function abilities(): HasOne
    {
        return $this->hasOne(Abilitie::class);
    }
}
