<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdmincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projecten = Project::paginate(100);
        return view('dashboard.projecten.index', ['projecten'=>$projecten]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $project = new Project(); 
       return view('dashboard.projecten.create', ['project' => $project ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $valid = $request->validate([
            'titel' => 'required|unique:projecten|max:255',
            'intro' => 'required|unique:projecten|max:255',
            'img' => '',
            'description' => 'required|unique:projecten|max:255',
        ]);

        $projecten = new Project($valid);
        $projecten->save();


        return redirect( route('projecten.index') );


      


    }

    /**
     * Display the specified resource.
     */
    public function show(Project $projecten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $projecten)
    {
      return view('dashboard.projecten.edit',['project' => $projecten]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $projecten)
    {
        $valid = $request->validate([
            'titel' => 'required|unique:projecten|max:255',
            'intro' => 'required|unique:projecten|max:255',
            'img' => '',
            'description' => 'required|unique:projecten|max:255',
        ]);
    
        $projecten->update($valid);
        $projecten->save();
    
        return redirect(route('projecten.index'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $projecten)
    {
        $projecten->delete();

        return redirect(route('projecten.index'));
    }

//     public function store(Request $request)
//     {
//         dump( $request->all() );
//     }
 }
