<?php

namespace App\Http\Controllers;

use App\Models\TodoStatus;
use App\Http\Requests\StoreTodoStatusRequest;
use App\Http\Requests\UpdateTodoStatusRequest;

class TodoStatusController extends Controller
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
     * @param  \App\Http\Requests\StoreTodoStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTodoStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TodoStatus  $todoStatus
     * @return \Illuminate\Http\Response
     */
    public function show(TodoStatus $todoStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TodoStatus  $todoStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoStatus $todoStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTodoStatusRequest  $request
     * @param  \App\Models\TodoStatus  $todoStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTodoStatusRequest $request, TodoStatus $todoStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TodoStatus  $todoStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoStatus $todoStatus)
    {
        //
    }
}
