<?php

declare(strict_types=1);

namespace AdminKit\Projects\UI\API\Controllers;

use AdminKit\Projects\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function show(int $id)
    {
        return Project::findOrFail($id);
    }
}
