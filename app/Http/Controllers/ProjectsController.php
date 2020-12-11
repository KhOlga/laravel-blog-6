<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Http\Requests\CreateProjectRequest;

class ProjectsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user = User::find(1)->first(); //temporary
        $projects = Project::where('user_id', 1)->get(); //TODO: add method findAllProjects

        return view('projects.create', [
            'user' => $user,
            'projects' => $projects
        ]);
    }

    /**
     * @param CreateProjectRequest $request
     */
    public function store(CreateProjectRequest $request)
    {
        $data = $request->validated();
        //$user = $request->user();
        $user = User::find(1)->first(); //temporary

        Project::forceCreate([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => $user->id
        ]);

        return redirect()->back()->with(['message' => 'Project created!']);

    }
}
