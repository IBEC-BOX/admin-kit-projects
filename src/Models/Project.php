<?php

namespace AdminKit\Projects\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Projects\Database\Factories\ProjectFactory;

class Project extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_projects';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): ProjectFactory
    {
        return new ProjectFactory();
    }
}
