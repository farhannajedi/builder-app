<?php

namespace App\Filament\Resources;

use App\Models\Opd;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OpdResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OpdResource\RelationManagers;
use App\Models\Templates;
use App\Models\User;

class OpdResource extends Resource
{
    protected static ?string $model = Opd::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'OPD';
    protected static ?string $navigationGroup = 'Manajemen Sistem';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama OPD')
                    ->required()
                    ->live(onBlur: true) // otomatis update slug saat input selesai
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug/Subdomain')
                    ->required()
                    ->unique()
                    ->helperText('Slug untuk subdomain (Contoh: diskominfo)'),
                Forms\Components\TextInput::make('address')
                    ->label('Alamat'),
                Forms\Components\TextInput::make('phone')
                    ->label('Telepon')
                    ->tel(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email(),
                Forms\Components\Select::make('template_id')
                    ->label('Template')
                    ->options(Templates::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                // Forms\Components\Select::make('user_id')
                //     ->label('Admin Opd')
                //     ->options(User::where('roles', 'admin_opd')->pluck('name', 'id'))
                //     ->searchable()
                //     ->nullable()
                //     ->helperText('Pilih Admin OPD Yang Bertanggung Jawab Untuk Website Ini'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama OPD')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug/Subdomain')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Admin OPD')
                    ->placeholder('- belum ditetapkan -'),
                Tables\Columns\TextColumn::make('template.name')
                    ->label('Template')
                    ->placeholder('-'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Telepon')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->toggleable(),
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
            'index' => Pages\ListOpds::route('/'),
            'create' => Pages\CreateOpd::route('/create'),
            'edit' => Pages\EditOpd::route('/{record}/edit'),
        ];
    }
}
