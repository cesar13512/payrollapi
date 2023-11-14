<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Subdepartment;

use App\Http\Resources\V1\CrudSuccesResource;
use App\Http\Resources\V1\CrudCountResource;
use App\Http\Resources\V1\SubdepartmentCollection;
use App\Http\Resources\V1\SubdepartmentResource;


use App\Filters\V1\SubdepartmentFilter;

class SubdepartmentController extends Controller
{

    public function index(Request $request)
    {

    $filter     = new SubdepartmentFilter();
    $queryItems = $filter->transform($request);
    $employee   = Subdepartment::where($queryItems)->get();
       
    return new SubdepartmentCollection($employee);

    }


    public function create()
    {
       
    }

 
    public function store(StoreEmployeeRequest $request)
    {
      
        
     
    }

    public function show(Employee $employee, Request $request)
    {  

    

    }

  
    public function edit(Employee $employee)
    {
     
    }


    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
     
    }

 
    public function destroy($id)
    {
  
   
    }
    
}
