<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KlasifikasiInformasiResource\Pages;
use App\Models\KlasifikasiInformasi;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class KlasifikasiInformasiResource extends Resource
{
    protected static ?string $model = KlasifikasiInformasi::class;
    protected static ?string $slug = 'klasifikasi-informasi';
    public static ?string $label = 'Klasifikasi Informasi';
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('klasifikasi_informasi')
                    ->label('Klasifikasi Informasi')
                    ->placeholder('Masukkan klasifikasi informasi')
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('klasifikasi_informasi')
                    ->sortable()
                    ->searchable()
                    ->label('Klasifikasi Informasi'),
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
            'index' => Pages\ListKlasifikasiInformasis::route('/'),
            'create' => Pages\CreateKlasifikasiInformasi::route('/create'),
            'edit' => Pages\EditKlasifikasiInformasi::route('/{record}/edit'),
        ];
    }
}
