<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharacterStoreRequest;
use App\Http\Requests\CharacterUpdateRequest;
use App\Models\Character;
use App\Transformers\CharacterTransformer;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return response([
            'success' => true,
            'message' => 'Characters retrieved',
            'characters' => fractal()->collection($user->characters)->transformWith(new CharacterTransformer())->toArray(),
        ]);
    }

    public function show($uuid)
    {
        $character = auth()->user()->characters()->where('id', $uuid)->first();

        if (!$character) {
            return response([
                'success' => false,
                'message' => 'Character not found',
            ], 404);
        }

        return response([
            'success' => true,
            'message' => 'Character retrieved',
            'character' => fractal()->item($character)->transformWith(new CharacterTransformer())->toArray(),
        ]);
    }

    public function store(CharacterStoreRequest $request)
    {
        $user = auth()->user();

        $character = $user->characters()->create([
            'name' => $request->name,
        ]);

        return response([
            'success' => true,
            'message' => 'Character created',
            'character' => fractal()->item($character)->transformWith(new CharacterTransformer())->toArray(),
        ]);
    }

    public function update(CharacterUpdateRequest $request, $uuid)
    {
        $character = auth()->user()->characters()->where('id', $uuid)->first();

        if (!$character) {
            return response([
                'success' => false,
                'message' => 'Character not found',
            ], 404);
        }

        $character->update([
            'name' => $request->name,
        ]);

        return response([
            'success' => true,
            'message' => 'Character updated',
            'character' => fractal()->item($character)->transformWith(new CharacterTransformer())->toArray(),
        ]);
    }

    public function delete($uuid)
    {
        $character = auth()->user()->characters()->where('id', $uuid)->first();

        if (!$character) {
            return response([
                'success' => false,
                'message' => 'Character not found',
            ], 404);
        }

        $character->delete();

        return response([
            'success' => true,
            'message' => 'Character deleted',
        ]);
    }
}
