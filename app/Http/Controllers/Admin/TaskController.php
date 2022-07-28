<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminTask;
use Exception;
use Illuminate\Http\Request;

class TaskController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,  $id)
    {

        try {
            $task = new AdminTask();
            $task->admin_id = $id;
            $task->title = $request->title;
            $task->due_on = $request->due_on;
            $task->editor = $request->editor;
            $task->costs = $request->costs;
            $task->priority = $request->priority;
            $task->status = 'incomplete';
            $task->assigned_to = $request->assigned_to;
            $task->save();

            return back();
        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
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
    public function update(Request $request, $task_id)
    {
        try {

            $task = AdminTask::where('task_id',$task_id)->first();
            $task->title = $request->title;
            $task->due_on = $request->due_on;
            $task->editor = $request->editor;
            $task->costs = $request->costs;
            $task->priority = $request->priority;
            $task->assigned_to = $request->assigned_to;
            $task->save();

            return back();
        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
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
        AdminTask::where('task_id',$id)->delete();
        return back();
    }

    public function updateStatus(Request $request)
    {
        $task_id = $request->task_id;
        $data = AdminTask::where('task_id', $task_id)->update([
            'status' => $request->status,
        ]);


    }
}
