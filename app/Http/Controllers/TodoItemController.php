<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use App\Http\Requests\StoreTodoItemRequest;
use App\Http\Requests\UpdateTodoItemRequest;
use Illuminate\Http\Request;

class TodoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = TodoItem::where('user_id', auth()->user()->id)->get();
        $doneCount = 0;

        foreach($todos as $todo) {
            if($todo -> todo_status_id == 2){
                $doneCount += 1;
            }
        }
        
        return view('home', [
            'todos' => $todos,
            'doneCount' => $doneCount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTodoItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
            'todo_name' => 'required',
        ]);

        TodoItem::create([
            'todo_name' => $data['todo_name'],
            'todo_status_id' => 1,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function show(TodoItem $todoItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoItem $todoItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTodoItemRequest  $request
     * @param  \App\Models\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function update($todo_id)
    {
        $todoItem = TodoItem::find($todo_id);

        if($todoItem -> todo_status_id == 1){
            TodoItem::find($todo_id)->update([
                'todo_status_id' => 2
            ]);
        } elseif($todoItem -> todo_status_id == 2) {
            TodoItem::find($todo_id)->update([
                'todo_status_id' => 1
            ]);
        }
        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($todo_id)
    {
        TodoItem::destroy($todo_id);
        
        return redirect()->back();
    }
}
