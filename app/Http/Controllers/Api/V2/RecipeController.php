<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\RecipeResource;
use App\Models\Recipe;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RecipeController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        return RecipeResource::collection(Recipe::orderBy('id', 'DESC')->with('category', 'tags', 'user')->paginate());
    }
}
