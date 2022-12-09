<?php

namespace App\Http\Resources;

use TiMacDonald\JsonApi\JsonApiResource;
use TiMacDonald\JsonApi\Link;

class UserResource extends JsonApiResource
{
    public function toAttributes($request): array
    {
        return [
            'name' => $this->name,
        ];
    }

    public function toLinks($request): array
    {
        return [
            Link::self(route('users.show', $this->id)),
            'related' => 'http://example.com/related',
        ];
    }
}
