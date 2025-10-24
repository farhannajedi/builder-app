<?php

namespace App\Filament\Resources;

use App\Models\Opd;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\OpdConfig;
use Filament\Tables\Table;
use App\Models\Opd_configs;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OpdConfigResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OpdConfigResource\RelationManagers;
use App\Models\Templates;

class OpdConfigResource extends Resource
{
    protected static ?string $model = Opd_configs::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'OPD Config';
    protected static ?string $navigationGroup = 'Pengaturan Website OPD';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('opd_id')
                    ->label('OPD')
                    ->options(Opd::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('template_id')
                    ->label('Template')
                    ->options(Templates::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\ColorPicker::make('theme_color')
                    ->label('Warna Tema')
                    ->nullable(),
                Forms\Components\FileUpload::make('banner_image')
                    ->label('Gambar Banner')
                    ->image()
                    ->directory('banners')
                    ->nullable(),
                Forms\Components\FileUpload::make('favicon')
                    ->label('Favicon')
                    ->image()
                    ->imageResizeTargetWidth('64')
                    ->imageResizeTargetHeight('64')
                    ->directory('favicons')
                    ->nullable(),
                Forms\Components\Select::make('homepage_layout')
                    ->label('Layout')
                    ->options([
                        'default' => 'Default',
                    ])
                    ->nullable(),
                Forms\Components\KeyValue::make('extra_settings')
                    ->label('Pengaturan Tambahan')
                    ->keyLabel('Nama Opsi')
                    ->valueLabel('Nilai Opsi')
                    ->addButtonLabel('Tambah Opsi')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('opd.name')
                    ->label('Nama OPD')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('template.name')
                    ->label('Template')
                    ->sortable(),
                Tables\Columns\TextColumn::make('theme_color')
                    ->label('Warna Tema')
                    ->badge(),
                Tables\Columns\ImageColumn::make('banner_image')
                    ->label('Banner'),
                Tables\Columns\ImageColumn::make('favicon')
                    ->label('Favicon'),
                Tables\Columns\TextColumn::make('homepage_layout')
                    ->label('Layout')
                    ->badge(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y'),
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
            'index' => Pages\ListOpdConfigs::route('/'),
            'create' => Pages\CreateOpdConfig::route('/create'),
            'edit' => Pages\EditOpdConfig::route('/{record}/edit'),
        ];
    }
}
