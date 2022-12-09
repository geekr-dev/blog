<?php

namespace App\Http\Resources;

use TiMacDonald\JsonApi\JsonApiResource;
use TiMacDonald\JsonApi\Link;

class PostResource extends JsonApiResource
{
    public function toAttributes($request): array
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'views' => $this->views,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }

    public function toRelationships($request): array
    {
        return [
            'author' => fn () => new UserResource($this->author),
            'comments' => fn () => CommentResource::collection($this->comments),
        ];
    }

    public function toLinks($request): array
    {
        return [
            Link::self(route('posts.show', $this->id)),
        ];
    }
}
