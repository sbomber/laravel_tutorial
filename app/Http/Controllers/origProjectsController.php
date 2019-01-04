<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
      $projects = Project::all();

      // return view( 'projects/index')->withProjects( $projects);
      return view('projects/index', compact('projects'));
    }

    public function create()
    {
      return view( 'projects/create');
    }

    public function store()
    {
      $project                = new Project();
      $project->title         = request('title');
      $project->description   = request('description');
      $project->save();

      return redirect('/projects');

      //  Other methods of display
      // return request( 'title' );
      // return request( 'description' );
      // return request()->all();
    }

    public function show(){
      $id = request( 'id');

      return redirect( '/projects/show', compact( $id ));
    }

    public function edit(){

    }

    public function update() {

    }

    public function destroy() {

    }
}
