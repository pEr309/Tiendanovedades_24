<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' =>$this->id,
            'cant_Almc'=>$this->cant_Almc,
            'product_id'=>$this->product_id,
            'created_at'=>$this->created_at,
            'update_at'=>$this->updated_at,
        ];
    }    
}
