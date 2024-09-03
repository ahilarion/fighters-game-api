<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Abilitie extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'attack',
        'defense',
        'dodge',
        'strength',
        'dexterity',
        'constitution',
        'intelligence',
    ];

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
