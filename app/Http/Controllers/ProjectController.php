<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$projects = Project::first();
        $projects = Project::orderBy('name', 'asc')->unmodified()->get();

        return view('index', [
            'projects' => $projects
        ]);
    }

    public function insertNewProject()
    {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();

        return dd('guardado');
    }

    public function updateProject()
    {
        $project = Project::findOrFail(2);
        $project->name = 'Proyecto de tecnología 333';
        $project->save();

        return dd('actualizado');
    }

    // Actualizar proyectos por lotes
    public function activeProjects()
    {
        Project::where('is_active', 0)
            ->update(['name' => 'Proyecto activado', 'city_id' => 4, 'is_active' => 1]);

        return dd('actualizado por lotes');
    }

    public function physicalDelete(int $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return dd('borrado físico');
    }

    public function logicalDelete(int $id)
    {
        $project = Project::findOrFail($id);
        $project->is_active = 0;
        $project->save();
        return dd('borrado lógico');
    }

    public function deleteInactiveProjects()
    {
        Project::where('is_active', 0)->delete();
        return dd('borrado los proyectos inactivos');
    }
}
