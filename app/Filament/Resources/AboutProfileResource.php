<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutProfileResource\Pages;
use App\Filament\Resources\AboutProfileResource\RelationManagers;
use App\Models\AboutProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutProfileResource extends Resource
{
    protected static ?string $model = AboutProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // TextInput::make('title')->required()->minLength(1)->unique(ignoreRecord: true)->maxLength(150),
                RichEditor::make('who_am_i')->required()->fileAttachmentsDirectory('profile/images')->columnSpanFull(),
                RichEditor::make('about_dixie')->required()->fileAttachmentsDirectory('profile/images')->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
             
            //    TextColumn::make('title')->sortable()->searchable(),
               TextColumn::make('who_am_i')->sortable()->searchable()->limit(50),
               TextColumn::make('about_dixie')->sortable()->searchable()->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListAboutProfiles::route('/'),
            'create' => Pages\CreateAboutProfile::route('/create'),
            'edit' => Pages\EditAboutProfile::route('/{record}/edit'),
        ];
    }
}
