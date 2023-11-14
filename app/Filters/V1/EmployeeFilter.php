<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;

use App\Filters\ApiFilter;

class EmployeeFilter {

 
 protected $safeParams = [
 'bioid'            => ['eq'],
 'name'             => ['eq'],
 'position'         => ['eq'],
 'department'       => ['eq'],
 'subdepartment'    => ['eq'],
 'subsubdepartment' => ['eq'],
 'dm'               => ['eq']
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
 return  $this->apifilter->transform($request);
 }

}