<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Department;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\CrudSuccesResource;
use App\Http\Resources\V1\CrudCountResource;
use App\Http\Resources\V1\DepartmentResource;
use App\Http\Resources\V1\DepartmentCollection;



class DepartmentController extends Controller
{
    public function index()
    { 
     
      return new DepartmentCollection(Department::all());
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
    public function store(StoreDepartmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return new DepartmentResource($department);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
