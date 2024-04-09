<?php

declare(strict_types=1);

namespace AdminKit\Projects\UI\API\Controllers;

use AdminKit\Projects\Models\Project;
use Spatie\LaravelData\DataCollection;
use AdminKit\Projects\UI\API\Data\ProjectData;

class ProjectController extends Controller
{
    public function index(): DataCollection
    {
        return ProjectData::collection(Project::all());
    }

    public function show(Project $project): ProjectData
    {
        return ProjectData::from($project);
    }
}
