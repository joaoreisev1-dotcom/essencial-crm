<?php

namespace App\Filament\Resources\Clientes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nome')
                    ->searchable(),
                TextColumn::make('tipo_cliente')
                    ->searchable(),
                TextColumn::make('cpf_cnpj')
                    ->searchable(),
                TextColumn::make('whatsapp')
                    ->searchable(),
                TextColumn::make('telefone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('data_nascimento')
                    ->date()
                    ->sortable(),
                TextColumn::make('empresa')
                    ->searchable(),
                TextColumn::make('cargo')
                    ->searchable(),
                TextColumn::make('cep')
                    ->searchable(),
                TextColumn::make('endereco')
                    ->searchable(),
                TextColumn::make('cidade')
                    ->searchable(),
                TextColumn::make('estado')
                    ->searchable(),
                TextColumn::make('origem')
                    ->searchable(),
                TextColumn::make('indicado_por')
                    ->searchable(),
                TextColumn::make('consultor_responsavel')
                    ->searchable(),
                TextColumn::make('cliente_desde')
                    ->date()
                    ->sortable(),
                TextColumn::make('ultima_interacao')
                    ->date()
                    ->sortable(),
                TextColumn::make('proximo_contato')
                    ->date()
                    ->sortable(),
                TextColumn::make('status')
                    ->searchable(),
                IconColumn::make('lgpd_aceito')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
