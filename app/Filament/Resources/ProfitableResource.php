<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfitableResource\Pages;
use App\Filament\Resources\ProfitableResource\RelationManagers;
use App\Models\Profitable;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\RichEditor;

class ProfitableResource extends Resource
{
    protected static ?string $model = Profitable::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-trending-up';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('join_class')->required()->fileAttachmentsDirectory('profitable/images')->columnSpanFull(),
                TextInput::make('month_of_class')->required()->minLength(1)->unique(ignoreRecord: true)->maxLength(150),
                RichEditor::make('one_on_one_training')->required()->fileAttachmentsDirectory('profitable/images')->columnSpanFull(),
                RichEditor::make('teach_a_team')->required()->fileAttachmentsDirectory('profitable/images')->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('join_class')->sortable()->searchable()->limit(50),
                TextColumn::make('month_of_class')->sortable()->searchable()->limit(50),
                TextColumn::make('one_on_one_training')->sortable()->searchable()->limit(50),
                TextColumn::make('teach_a_team')->sortable()->searchable()->limit(50),
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
            'index' => Pages\ListProfitables::route('/'),
            'create' => Pages\CreateProfitable::route('/create'),
            'edit' => Pages\EditProfitable::route('/{record}/edit'),
        ];
    }
}
