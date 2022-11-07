<?php

namespace App\Http\Resources;

use App\Utils\FormatTime;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminGolfResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'time_start' => FormatTime::convertTime($this->time_start),
            'time_close' => FormatTime::convertTime($this->time_close),
            'image' => $this->image,
            'address' => $this->address,
            'is_open' => $this->is_open,
            'price' => $this->price,
            'golf_courses' => json_decode($this->golf_courses),
            'description' => $this->description,
            'number_hole' => $this->number_hole
        ];
    }
}
