<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Workexperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function index()
    {
        dd('Test');

        return view('admin.workExperiences.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workexperience  $workexperience
     * @return \Illuminate\Http\Response
     */
    public function show(Workexperience $workexperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workexperience  $workexperience
     * @return \Illuminate\Http\Response
     */
    public function edit(Workexperience $workexperience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workexperience  $workexperience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workexperience $workexperience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workexperience  $workexperience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workexperience $workexperience)
    {
        //
    }
}
