<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
class UserTransformer extends TransformerAbstract
{
    public function transform($character): array
    {
        return [
            'id' => $character->id,
            'username' => $character->username,
        ];
    }
}
