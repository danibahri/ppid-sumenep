<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailJenisInformasiResource\Pages;
use App\Models\DetailJenisInformasi;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DetailJenisInformasiResource extends Resource
{
    protected static ?string $model = DetailJenisInformasi::class;
    protected static ?string $slug = 'detail-jenis-informasi';
    public static ?string $label = 'Detail Jenis Informasi';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('description')
                    ->label('Detail Jenis Informasi')
                    ->placeholder('Masukkan Detail jenis informasi')
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description')
                    ->sortable()
                    ->searchable()
                    ->label('Detail Jenis Informasi'),
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
            'index' => Pages\ListDetailJenisInformasis::route('/'),
            'create' => Pages\CreateDetailJenisInformasi::route('/create'),
            'edit' => Pages\EditDetailJenisInformasi::route('/{record}/edit'),
        ];
    }
}
