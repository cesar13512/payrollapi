<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CrudCountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'data'      => $this->resource['data'],
        'totaldata' => $this->resource['totaldata']
        ];
    }

    public function with($request)
    {
        return ['status' => 'success'];
    }

}
