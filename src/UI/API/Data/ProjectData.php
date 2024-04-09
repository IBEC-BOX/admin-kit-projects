<?php

namespace AdminKit\Projects\UI\API\Data;

use AdminKit\Projects\Models\Project;
use Spatie\LaravelData\Data;

class ProjectData extends Data
{
    public function __construct(
        public string $title,
        public string $description,
        public string $image,
        public array $tags,
    ) {
    }

    public static function fromModel(Project $project): ProjectData
    {
        return new self(
            title: $project->title,
            description: $project->description,
            image: $project->image,
            tags: $project->tags,
        );
    }
}
