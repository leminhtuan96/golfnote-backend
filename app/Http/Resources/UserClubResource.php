<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserClubResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'address' => $this->user->address,
                'avatar' => $this->user->avatar,
            ],
            'id' => $this->id,
            'name' => $this->name,
            'introduction' => $this->introduction,
            'kakaotalk_link' => $this->kakaotalk_link,
            'images' => json_decode($this->images)
        ];
    }
}
