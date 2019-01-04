<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;
use PhpParser\Node\Expr\PreDec;
// use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        // return view( 'projects/index')->withProjects( $projects);
        return view('projects/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
                // 'title' => 'required',
                // 'description' => 'required'
                'title' => ['required','min:3', 'max:255'],
                'description' => ['required', 'min:10']
                ]);

        Project::create( $validate );

        // Project::create([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description')
        // ]);
        // $project                = new Project();
        // $project->title         = $request->input('title');
        // $project->description   = $request->input('description');
        // $project->save();

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects/show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view( 'projects/edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project ) // $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->save();

        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
