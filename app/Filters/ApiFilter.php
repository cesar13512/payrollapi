<?php

namespace App\Filters;

class ApiFilter{

 public function __construct($safeParams, $operatorMap) {
 $this->safeParams = $safeParams;
 $this->operatorMap = $operatorMap;
 }

 public function transform($request){

    $eloquery = [];
   
    foreach($this->safeParams as $key => $value) {
     
     $query = $request->query($key);

   

     if(!isset($query)){
     continue;
     }

     foreach($value as $operator) {
     
      if(isset($query[$operator])){
      $eloquery[] = [$key, $this->operatorMap[$operator], $query[$operator]];
      }
    
     }
       
    }
   
    return $eloquery;
    

 }

}