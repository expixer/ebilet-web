<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'merchant_id' => $this->merchant_id,
            'category_id' => $this->category_id,
            'min_price' => $this->lowest_price,
            'seats' => $this->seats,
            'tags' => $this->tags,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'location' => $this->location,
            'image' => $this->image,
            'status' => $this->status,
//            'type' => $this->type,
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,
            'products' => ProductResource::collection($this->products),
            'merchant' => new MerchantResource($this->merchant),
            'category' => new CategoryResource($this->category),
        ];
    }
}
