<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisInformasiResource\Pages;
use App\Models\JenisInformasi;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;


class JenisInformasiResource extends Resource
{
    protected static ?string $model = JenisInformasi::class;
    protected static ?string $slug = 'jenis-informasi';
    public static ?string $label = 'Jenis Informasi';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('jenis_informasi')
                    ->label('Jenis Informasi')
                    ->placeholder('Masukkan jenis informasi')
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_informasi')
                    ->sortable()
                    ->searchable()
                    ->label('Jenis Informasi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListJenisInformasis::route('/'),
            'create' => Pages\CreateJenisInformasi::route('/create'),
            'edit' => Pages\EditJenisInformasi::route('/{record}/edit'),
        ];
    }
}
