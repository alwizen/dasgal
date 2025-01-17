<?php

namespace App\Filament\Resources\Fleet;

use App\Filament\Resources\Fleet\TankerResource\Pages;
use App\Filament\Resources\Fleet\TankerResource\RelationManagers;
use App\Models\Fleet\Tanker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TankerResource extends Resource
{
    protected static ?string $model = Tanker::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nopol')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListTankers::route('/'),
            'create' => Pages\CreateTanker::route('/create'),
            'edit' => Pages\EditTanker::route('/{record}/edit'),
        ];
    }
}
