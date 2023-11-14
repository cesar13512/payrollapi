<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Subsubdepartment;

use App\Http\Resources\V1\CrudSuccesResource;
use App\Http\Resources\V1\CrudCountResource;

use App\Http\Resources\V1\SubsubdepartmentCollection;
use App\Http\Resources\V1\SubsubdepartmentResource;


use App\Filters\V1\SubsubdepartmentFilter;


class SubsubdepartmentController extends Controller
{
    public function index(Request $request)
    {

    $filter     = new SubsubdepartmentFilter();
    $queryItems = $filter->transform($request);
    $employee   = Subsubdepartment::where($queryItems)->get();
       
    return new SubsubdepartmentCollection($employee);

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
