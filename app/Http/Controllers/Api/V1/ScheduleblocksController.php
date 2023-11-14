<?php


namespace App\Http\Controllers\Api\V1;


use App\Models\Scheduleblocks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



use App\Http\Requests\V1\StoreScheduleblocksRequest;
use App\Http\Requests\V1\UpdateScheduleblocksRequest; 


use App\Http\Resources\V1\CrudResource;
use App\Http\Resources\V1\CrudSuccesResource;
use App\Http\Resources\V1\CrudCountResource;
use App\Http\Resources\V1\ScheduleblocksCollection; 
use App\Http\Resources\V1\ScheduleblocksResource; 




class ScheduleblocksController extends Controller
{
    public function index(Request $request)
    {
        
        $perPage    = 5; 
        // $filter     = new EmployeeFilter();
        // $queryItems = $filter->transform($request);
        // $employee   = Employee::where($queryItems);
    
        // $includePayrolls  = $request->query('includePayrolls');
        // $includeSchedules = $request->query('includeSchedules');
        
        // if($includePayrolls){
        // // $employee  = $employee->with(['payro lls' => function ($query) {
        // // $query->where('late', '=', 3);
        // // }]
        // // );
        // $employee  = $employee->with(['payrolls' ]
        // );
        // }
            
        // if($includeSchedules){
        // $employee  = $employee->with(['schedules']);
        // }
            

        return new ScheduleblocksCollection(Scheduleblocks::paginate($perPage)->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

            
  
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleblocksRequest $request)
    {
        
        $data  = Scheduleblocks::create($request->all());
        $count = Scheduleblocks::count();
        return new CrudCountResource(['data' => $data, 'totaldata' => $count]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Scheduleblocks $Scheduleblocks)
    {
        //

        return new ScheduleblocksResource($Scheduleblocks);
  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scheduleblocks $scheduleblocks)
    {   
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleblocksRequest $request, $id)
    {

     $resource = Scheduleblocks::findOrFail($id)->update($request->all());
     return new CrudSuccesResource(['success' =>  $resource]);
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         
     $resource = Scheduleblocks::findOrFail($id)->delete();
     return new CrudSuccesResource(['success' => true]);

    }

}   
 