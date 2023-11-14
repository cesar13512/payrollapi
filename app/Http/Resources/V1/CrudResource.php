<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CrudResource extends JsonResource
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
         ];
     }
 
     public function with($request)
     {
         return ['status' => 'success'];
     }

    }