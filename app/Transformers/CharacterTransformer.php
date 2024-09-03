<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
class CharacterTransformer extends TransformerAbstract
{
    public function transform($character): array
    {
        return [
            'id' => $character->uuid,
            'name' => $character->name,
            'class' => $character->class->name,
            'abilities' => [
                'attack' => $character->abilities->attack,
                'defense' => $character->abilities->defense,
                'dodge' => $character->abilities->dodge,
                'strength' => $character->abilities->strength,
                'dexterity' => $character->abilities->dexterity,
                'constitution' => $character->abilities->constitution,
                'intelligence' => $character->abilities->intelligence,
            ],
        ];
    }
}
