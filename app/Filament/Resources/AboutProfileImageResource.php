<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutProfileImageResource\Pages;
use App\Filament\Resources\AboutProfileImageResource\RelationManagers;
use App\Models\AboutProfileImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class AboutProfileImageResource extends Resource
{
    protected static ?string $model = AboutProfileImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('about_profile_id')->relationship('profile', 'title')
                ->searchable()->required(),
                FileUpload::make('image_path')->image()->directory('profile/images'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')->sortable()->searchable(),

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
            'index' => Pages\ListAboutProfileImages::route('/'),
            'create' => Pages\CreateAboutProfileImage::route('/create'),
            'edit' => Pages\EditAboutProfileImage::route('/{record}/edit'),
        ];
    }
}
