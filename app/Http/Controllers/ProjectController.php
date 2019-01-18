<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage as Beverage;
use App\User;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $beverage=auth()->user()->beverages;
        return view('project.index', compact('beverage'));
    }

    public function create()
    {
        return view('project.create');
    }
    public function store()
    {
        $attributes=request()->validate([
        'title'=>['required','min:3'],
        'description'=>['required','min:3'],
     ]);
        $attributes['owner_id']=auth()->id();
        Beverage::create($attributes);
        session()->flash('message', 'your project has been created');
        return redirect('/project');
    }

    public function edit(Beverage $project)
    {
                  return view('project.edit', compact('project'));
    }

    public function update(Beverage $project)
    {
        $attributes=request()->validate([
            'title'=>['required','min:3'],
            'description'=>['required','min:3'],
        ]);

        $project->update($attributes);
        return redirect('/project');
    }
    public function destroy(Beverage $project)
    {
        $project->delete();
        return redirect('/project');
    }
    public function show(Beverage $project)
    {
        $this->authorize('update', $project);
        return view('project.show', compact('project'));
    }
}
