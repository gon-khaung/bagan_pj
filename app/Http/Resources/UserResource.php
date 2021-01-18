<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'fullname'          => $this->name,
            'email'          => $this->email,
            // 'registered_date' => $this->created_at->format('F j, Y, g:i A'),
        ];
    }
}
