<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreForm_CCTVRequest;
use App\Http\Requests\UpdateForm_CCTVRequest;
use App\Models\Form_CCTV;

class FormCCTVController extends Controller
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
     * @param  \App\Http\Requests\StoreForm_CCTVRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForm_CCTVRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form_CCTV  $form_CCTV
     * @return \Illuminate\Http\Response
     */
    public function show(Form_CCTV $form_CCTV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form_CCTV  $form_CCTV
     * @return \Illuminate\Http\Response
     */
    public function edit(Form_CCTV $form_CCTV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForm_CCTVRequest  $request
     * @param  \App\Models\Form_CCTV  $form_CCTV
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForm_CCTVRequest $request, Form_CCTV $form_CCTV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form_CCTV  $form_CCTV
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form_CCTV $form_CCTV)
    {
        //
    }
}
