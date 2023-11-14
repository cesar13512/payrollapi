<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\CrudSuccesResource;
use App\Http\Resources\V1\CrudCountResource;
use App\Http\Resources\V1\EnployeeResource;
use App\Http\Resources\V1\EmployeeCollection;




use App\Filters\V1\EmployeeFilter;

use App\Http\Requests\V1\StoreEmployeeRequest;
use App\Http\Requests\V1\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
 
    public function index(Request $request)
    {
        
    $perPage    = 5; 
    $filter     = new EmployeeFilter();
    $queryItems = $filter->transform($request);
    $employee   = Employee::where($queryItems);

    
    $includePayrolls  = $request->query('includePayrolls');
    $includeSchedules = $request->query('includeSchedules');


    if($includePayrolls){
    // $employee  = $employee->with(['payro lls' => function ($query) {
    // $query->where('late', '=', 3);
    // }]
    // );
    $employee  = $employee->with(['payrolls' ]
    );
    }
        
    if($includeSchedules){
    $employee  = $employee->with(['schedules']);
    }
           
       
    return new EmployeeCollection($employee->paginate($perPage)->appends($request->query()));

    }


    public function create()
    {
       
    }

 
    public function store(StoreEmployeeRequest $request)
    {
    
    
     $data  = Employee::create($request->all());
     $count = Employee::count();
     return new CrudCountResource(['data' => $data, 'totaldata' => $count]);

    }

    public function show(Employee $employee, Request $request)
    {  

     $includePayrolls = $request->query('includePayrolls');

     if($includePayrolls){
     return new EnployeeResource($employee->loadMissing('payrolls'));
     }
    
     return new EnployeeResource($employee);

    }

  
    public function edit(Employee $employee)
    {
     
    }


    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
     
     $employee->update($request->all());
     return new CrudSuccesResource(['success' => true]);

    }

 
    public function destroy($id)
    {
  
     $resource = Employee::find($id)->delete();
     return new CrudSuccesResource(['success' => true]);

    }
}
