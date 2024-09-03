<?php

namespace App\Http\Controllers;

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

    }
}
