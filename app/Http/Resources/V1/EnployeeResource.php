<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EnployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'id'               => $this->id,
        'bioid'            => $this->bioid,
        'name'             => $this->name,
        'position'         => $this->position,
        'rate'             => $this->rate,
        'cola'             => $this->cola,
        'department'       => $this->department,
        'subdepartment'    => $this->subdepartment,
        'subsubdepartment' => $this->subsubdepartment,
        'dm'               => $this->dm,
        'payrolls'         => PayrollResource::collection($this->whenLoaded('payrolls')),
        ];
    }
}
