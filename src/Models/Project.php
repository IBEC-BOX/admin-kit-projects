<?php

namespace AdminKit\Projects\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Projects\Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
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

    public function image(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getFirstMediaUrl()
        );
    }

    protected static function newFactory(): ProjectFactory
    {
        return new ProjectFactory;
    }
}
