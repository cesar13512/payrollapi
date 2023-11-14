<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleblocksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
     {
       
        return [
            'id'      => $this->id,
            'ontime'  => $this->ontime,
            'offtime' => $this->offtime,
            'intime'  => $this->intime,
            'outtime' => $this->outtime
        ];
    }

    public function with($request)
    {
        return ['status' => 'success'];
    }
}
