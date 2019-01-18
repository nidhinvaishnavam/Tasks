<?php

namespace App\Http\Controllers;

use App\Task;
use  App\Beverage;

use Illuminate\Http\Request;

class ProjectTaskController extends Controller
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
    public function store(Beverage $project)
    {
        //    Task::create([
        //     'beverage_id'=>$project->id,
        //     'description'=>request('description')]);
        //     return back();//
        //old method

        //new method

        $attributes=request()->validate(['description'=>'required']);
        $project->addTask($attributes);
        return back();
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
    public function update(Task $task)
    {
        //  if(request->has('completed')){
        //     $task->complete();
        //  }
        //  else{
        //     $task->incomplete();
        //  }

        //this is one method

        // request()->has('completed')? $task->complete():$task->incomplete();

        //this is another method of function calling

        $method=request()->has('completed')?'complete':'incomplete';
        $task->$method();
        return back();

        //this is third method
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

    public function use(Request $request)
    {
        dd($request->nidhin);
    }

    public function useMe()
    {
        dd(1);
    }
}
