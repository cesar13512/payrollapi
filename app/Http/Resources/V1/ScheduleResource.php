<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * 
     * @return array<string, mixed>
     */
  
    public function toArray(Request $request): array
     {
       
        return [
            'ontime' => $this->ontime,
            'offtime' => $this->offtime,
            'intime' => $this->intime,
            'outtime' => $this->outtime
        ];
    }

    public function with($request)
    {
        return ['status' => 'success'];
    }
}
