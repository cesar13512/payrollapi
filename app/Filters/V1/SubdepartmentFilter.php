<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;

use App\Filters\ApiFilter;

class SubdepartmentFilter{

 
 protected $safeParams = [
 'subdepartment'    => ['eq'],
 'department_id'    => ['eq']
 ];

  
 protected $operatorMap = [
 'eq'     => '=',
 'lt'     => '<',
 'lte'    => '=<',
 'gt'     => '>',
 'gte'    => '>='
 ];

 public function __construct() {
    $this->apifilter  = new ApiFilter($this->safeParams, $this->operatorMap);
  
   }
   public function transform(Request $request){
     $this->apifilter->transform($request);
   }

}