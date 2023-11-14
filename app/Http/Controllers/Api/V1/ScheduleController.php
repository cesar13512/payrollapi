<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Schedule;
use App\Http\Controllers\Controller;


use App\Http\Requests\V1\StoreScheduleRequest;

use App\Http\Resources\V1\CrudResource;
use App\Http\Resources\V1\ScheduleResource; 


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreScheduleRequest $request)
    {
        
        $data  = Schedule::create($request->all());
        return new CrudResource(['data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //

        return new ScheduleResource($schedule);
  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
