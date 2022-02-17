@extends('layouts.main')

@section('title', 'Home')

@section('aditional-styles')
    <link rel="stylesheet" href="css/pages/home.css">
@endsection

@section('content')
    <div class="main-container px-5 pt-5 d-flex flex-column ">
        <div class="main-menu">
            <a href="/manage-trains" class="waves-effect waves-light btn-large" id="manage-trains">
                <h5>Gerenciar Treinos</h5>
            </a>
            <a href="/manage-evaluations" class="waves-effect waves-light btn-large" id="manage-evaluations">
                <h5>Gerenciar Avaliações</h5>
            </a>
            @if (Auth::user()->personal)
                <a href="/users" class="waves-effect waves-light btn-large" id="manage-clients">
                    <h5>Gerenciar Clientes</h5>
                </a>
            @else
                <a href="/user/{{ Auth::user()->id }}/schedule" class="waves-effect waves-light btn-large"
                    id="manage-clients">
                    <h5>Minha rotina</h5>
                </a>
            @endif
            <a href="/exercises" class="waves-effect waves-light btn-large" id="manage-exercices">
                <h5>Gerenciar Exercicios</h5>
            </a>
        </div>
    </div>
@endsection
