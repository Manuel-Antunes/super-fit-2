@extends('layouts.main')
@section('title', 'Usuários')
@section('content')
    <div class="container-fluid">

        <button id="fab-exercice" data-target="exercice-creation-modal"
            class="btn-floating purple darken-4 fab fixed-bottom btn-large waves-effect waves-light modal-trigger">
            <i class="material-icons">add</i>
        </button>
    </div>
@endsection
@section('aditional-styles')
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="css/pages/user/index.css">
    <style>
        @media(min-width: 780px) {
            .overflow-auto {
                overflow: initial !important;
            }
        }

    </style>
@endsection
