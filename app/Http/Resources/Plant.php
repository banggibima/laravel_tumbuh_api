<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Plant extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'owner_id' => new Owner($this->owner),
            'category_id' => new Category($this->category),
            'name' => $this->name,
            'description' => $this->description,
            'size' => $this->size,
        ];
    }
}
