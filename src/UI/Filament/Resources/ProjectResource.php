<?php

namespace AdminKit\Projects\UI\Filament\Resources;

use AdminKit\Core\Forms\Components\TranslatableTabs;
use AdminKit\Projects\Models\Project;
use AdminKit\Projects\UI\Filament\Resources\ProjectResource\Pages;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                    ->label(__('admin-kit-projects::projects.resource.image'))
                    //->required()
                    ->image()
                    ->optimize('webp')
                    ->resize(30),
                Forms\Components\TagsInput::make('tags')
                    ->label(__('admin-kit-projects::projects.resource.tags')),
                TranslatableTabs::make(fn ($locale) => Forms\Components\Tabs\Tab::make($locale)->schema([
                    Forms\Components\TextInput::make("title.$locale")
                        ->label(__('admin-kit-projects::projects.resource.title')),
                    Forms\Components\RichEditor::make("description.$locale")
                        ->label(__('admin-kit-projects::projects.resource.description')),
                ])),
            ])
            ->columns(1);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin-kit-projects::projects.resource.id'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('admin-kit-projects::projects.resource.title')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin-kit-projects::projects.resource.created_at')),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProject::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-projects::projects.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-projects::projects.resource.plural_label');
    }
}
