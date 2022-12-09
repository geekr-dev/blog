<?php

namespace App\Http\Resources;

use TiMacDonald\JsonApi\JsonApiResource;
use TiMacDonald\JsonApi\Link;

class CommentResource extends JsonApiResource
{
    public function toAttributes($request): array
    {
        return [
            'content' => $this->content,
        ];
    }

    public function toRelationships($request): array
    {
        return [
            'author' => fn () => new UserResource($this->author)
        ];
    }

    public function toLinks($request): array
    {
        return [
            Link::self(route('posts.comments.show', [$this->post_id, $this->id])),
        ];
    }
}
