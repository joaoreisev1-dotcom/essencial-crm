<?php

namespace App\Filament\Resources\Clientes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('nome')
                    ->label('Cliente')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('tipo_cliente')
                    ->label('Tipo')
                    ->badge()
                    ->color(fn (string $state) => $state === 'PJ' ? 'info' : 'success'),

                TextColumn::make('whatsapp')
                    ->label('WhatsApp')
                    ->searchable(),

                TextColumn::make('cidade')
                    ->label('Cidade')
                    ->searchable(),

                TextColumn::make('origem')
                    ->label('Origem')
                    ->badge(),

                TextColumn::make('consultor_responsavel')
                    ->label('Consultor'),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state) => match ($state) {
                        'ativo' => 'success',
                        'prospect' => 'warning',
                        'inativo' => 'danger',
                        default => 'gray',
                    }),

            ])

            ->filters([

            ])

            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}