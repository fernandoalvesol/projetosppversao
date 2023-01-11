@extends('Layout.app')

@section('title', 'Listagem dos usuários')

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-1">
    SPP - SISTEMA DE PROTEÇÃO DE PROVEDORES
    <a href="#" class="bg-blue-900 rounded-full text-white px-5 text-sm">+</a>
    <a href="{{url('/logout')}}" class="bg-blue-900 rounded-full text-white px-5 text-sm">sair</a>
</h1>