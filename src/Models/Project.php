<?php

namespace AdminKit\Projects\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Projects\Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Project extends AbstractModel implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_projects';

    protected $fillable = [
        'title',
        'description',
        'tags',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    protected $translatable = [
        'title',
        'description',
    ];

    protected static function newFactory(): ProjectFactory
    {
        return new ProjectFactory();
    }
}
