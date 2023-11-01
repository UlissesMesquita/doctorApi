<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateDoctor;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    protected Doctor $model;

    public function __construct(){
        $this->model = new Doctor();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrUpdateDoctor $request)
    {

        try {

            $doctor = $this->model->create($request->all());
            
            return response()->json([
                'message' => "Created",
                'data' => $doctor
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'data' => "Error",
                'error' => $e->getMessage()
            ], 400);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateOrUpdateDoctor $request, $id)
    {
        try {

            $doctor = $this->model->where('id', $id)->update($request->all());
            
            return response()->json([
                'message' => "Updated",
                'data' => $doctor
            ], 200);

            
            
        } catch (\Exception $e) {
            return response()->json([
                'data' => "Error",
                'error' => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
