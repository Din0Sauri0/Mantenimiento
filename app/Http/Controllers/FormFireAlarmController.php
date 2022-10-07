<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreForm_fire_alarmRequest;
use App\Http\Requests\UpdateForm_fire_alarmRequest;
use App\Models\Form_fire_alarm;

class FormFireAlarmController extends Controller
{
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
     * @param  \App\Http\Requests\StoreForm_fire_alarmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForm_fire_alarmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form_fire_alarm  $form_fire_alarm
     * @return \Illuminate\Http\Response
     */
    public function show(Form_fire_alarm $form_fire_alarm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form_fire_alarm  $form_fire_alarm
     * @return \Illuminate\Http\Response
     */
    public function edit(Form_fire_alarm $form_fire_alarm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForm_fire_alarmRequest  $request
     * @param  \App\Models\Form_fire_alarm  $form_fire_alarm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForm_fire_alarmRequest $request, Form_fire_alarm $form_fire_alarm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form_fire_alarm  $form_fire_alarm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form_fire_alarm $form_fire_alarm)
    {
        //
    }
}
