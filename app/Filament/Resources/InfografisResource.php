<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfografisResource\Pages;
use App\Models\Infografis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use App\Models\KlasifikasiInformasi;
use App\Models\JenisInformasi;
use App\Models\DetailJenisInformasi;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class InfografisResource extends Resource
{
    protected static ?string $model = Infografis::class;

    protected static ?string $slug = 'infografis';
    public static ?string $label = 'Infografis';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
                TextInput::make('nama_infografis')
                    ->label('Nama Infografis')
                    ->required(),
                Select::make('klasifikasi_informasi_id')
                    ->label('Klasifikasi Informasi') 
                    ->options(function () {
                        return KlasifikasiInformasi::pluck('klasifikasi_informasi', 'id')->toArray();
                    })
                    ->searchable() 
                    ->required(), 
                Select::make('jenis_informasi_id')
                    ->label('Jenis Informasi')
                    ->options(function () {
                        return JenisInformasi::pluck('jenis_informasi', 'id')->toArray();
                    })
                    ->searchable()
                    ->required(),
                Select::make('detail_jenis_informasi_id')
                    ->label('Detail Jenis Informasi')
                    ->options(function () {
                        return DetailJenisInformasi::pluck('description', 'id')->toArray();
                    })
                    ->searchable()
                    ->required(),
                TextInput::make('post_by')
                    ->label('Post By')
                    ->required(),
                Select::make('is_active')
                    ->label('Status')
                    ->options([
                        '0' => 'Tidak Aktif',
                        '1' => 'Aktif',
                    ])
                    ->required(),
                FileUpload::make('path_dokumen')
                    ->disk('public')
                    ->directory('infografis')
                    ->label('File Infografis')
                    ->required()
                    ->preserveFilenames()
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend('infografis-'),
                    )
                    ->columnSpan(2),
                TextInput::make('nama_dokumen')
                    ->label('Nama Dokumen')
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('klasifikasiInformasi.klasifikasi_informasi')
                    ->label('Klasifikasi Informasi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('jenisInformasi.jenis_informasi')
                    ->label('Jenis Informasi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('detailJenisInformasi.description')
                    ->label('Detail Jenis Informasi')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('nama_infografis')
                    ->label('Nama Infografis')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('post_by')
                    ->label('Di Posting Oleh')
                    ->searchable()
                    ->sortable(),
                SelectColumn::make('is_active')
                    ->label('Status')
                    ->options([
                        '0' => 'Tidak Aktif',
                        '1' => 'Aktif',
                    ])  
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListInfografis::route('/'),
            'create' => Pages\CreateInfografis::route('/create'),
            'edit' => Pages\EditInfografis::route('/{record}/edit'),
        ];
    }
}
