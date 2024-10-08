<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'state',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name
            ],
            'include' => StoryResource::collection($this->whenLoaded('stories'))
        ];
    }
}
