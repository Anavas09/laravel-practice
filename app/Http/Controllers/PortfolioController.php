<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;

class PortfolioController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate();

        return view('projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project;
        return view('projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        //return request();
        //$title = request('title');
        //$url = request('url');
        //$description = request('description');

        /*return Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]);*/
        
        /*Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]);*/

        //input name property and column name from database are the same
        //Project::create(request()->all()); //Theres a problem with massive asignation

        /*$fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);*/

        //Using SaveProjectRequest

        Project::create( $request->validated() );

        return redirect()->route('portfolio.index')->with('status', 'Project created succesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('portfolio.show', $project)->with('status', 'Project updated succesfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('portfolio.index')->with('status', 'Project was deleted succesfully.');
    }
}
