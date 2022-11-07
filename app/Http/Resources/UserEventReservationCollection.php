<?php

namespace App\Http\Resources;

use App\Models\UserEventReservation;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserEventReservationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'datas' => UserEventReservationResource::collection($this->collection),
            'total_page' => $this->lastPage(),
        ];
    }
}
