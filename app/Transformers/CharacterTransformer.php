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
        ];
    }
}
