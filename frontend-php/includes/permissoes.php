<?php

function possuiPermissao($modulo)
{
    if (!isset($_SESSION['perfil'])) {
        return false;
    }

    $perfil = strtoupper($_SESSION['perfil']);

    $permissoes = [

        'ADMINISTRADOR' => [
            'dashboard',
            'usuarios',
            'perfis',
            'permissoes',
            'clientes',
            'pets',
            'produtos',
            'servicos',
            'pedidos',
            'agendamentos',
            'relatorios'
        ],

        'FUNCIONARIO' => [
            'dashboard',
            'clientes',
            'pets',
            'produtos',
            'servicos',
            'pedidos',
            'agendamentos'
        ]

    ];

    return in_array(
        strtolower($modulo),
        array_map('strtolower', $permissoes[$perfil] ?? [])
    );
}

function verificarPermissao($modulo)
{
    if (!possuiPermissao($modulo)) {

        die("
            <h2>Acesso Negado</h2>
            <p>Você não possui permissão para acessar este módulo.</p>
        ");
    }
}