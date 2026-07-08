<?php

namespace App\Filament\Resources\Clientes\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nome')
                    ->required(),
                TextInput::make('tipo_cliente')
                    ->required()
                    ->default('PF'),
                TextInput::make('cpf_cnpj'),
                TextInput::make('whatsapp'),
                TextInput::make('telefone')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                DatePicker::make('data_nascimento'),
                TextInput::make('empresa'),
                TextInput::make('cargo'),
                TextInput::make('cep'),
                TextInput::make('endereco'),
                TextInput::make('cidade'),
                TextInput::make('estado'),
                TextInput::make('origem'),
                TextInput::make('indicado_por'),
                TextInput::make('consultor_responsavel'),
                DatePicker::make('cliente_desde'),
                DatePicker::make('ultima_interacao'),
                DatePicker::make('proximo_contato'),
                TextInput::make('status')
                    ->required()
                    ->default('ativo'),
                Toggle::make('lgpd_aceito')
                    ->required(),
                Textarea::make('observacoes')
                    ->columnSpanFull(),
            ]);
    }
}
