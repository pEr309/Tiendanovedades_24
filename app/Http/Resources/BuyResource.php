<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BuyResource extends JsonResource
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
             'name' => $this->name,
             'total' => $this->total,
             'image'=> $this->image,
             'user_id' => $this->user_id,
             'user'=> $this->user,
             'created_at' => $this->created_at,
             'updated_at' => $this->update_at

        ];
    }
}
