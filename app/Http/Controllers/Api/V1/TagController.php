<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return TagResource::collection(Tag::with('recipes.category', 'recipes.tags', 'recipes.user')->get());
    }

    public function show(Tag $tag)
    {
        return new TagResource($tag->load('recipes.category', 'recipes.tags', 'recipes.user'));
    }
}
