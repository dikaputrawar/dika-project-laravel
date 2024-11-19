<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MyprojectResource\Pages;
use App\Filament\Resources\MyprojectResource\RelationManagers;
use App\Models\Myproject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\TextFilter; 
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MyprojectResource extends Resource
{
    protected static ?string $model = Myproject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title'),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->placeholder('Masukkan deskripsi di sini')
                    ->rows(5)
                    ->maxLength(500)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->description)
            ])
            ->filters([
                Tables\Filters\Filter::make('title')
                    ->label('Filter Title')
                    ->query(function (Builder $query, $value) {
                        $query->where('title', 'like', '%'.$value.'%');
                    }),

                Tables\Filters\Filter::make('description')
                    ->label('Filter Description')
                    ->query(function (Builder $query, $value) {
                        $query->where('description', 'like', '%'.$value.'%');
                    })
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
            'index' => Pages\ListMyprojects::route('/'),
            'create' => Pages\CreateMyproject::route('/create'),
            'edit' => Pages\EditMyproject::route('/{record}/edit'),
        ];
    }
}
