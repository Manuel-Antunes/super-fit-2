@extends('layouts.main')

@section('title', 'Manage Exercices')

@section('aditional-styles')
    <link rel="stylesheet" href="css/pages/manage-exercises.css">
@endsection

@section('content')
    <div class="container-fluid px-5 pt-5 d-flex flex-column">
        <div class="main-container">
            @foreach ($exercises as $exercise)
                <a class="waves-effect waves-light btn-large">
                    <span>
                        {{ $exercise->name }}
                    </span>
                    <p>
                        {{ $exercise->description }}
                    </p>
                </a>
            @endforeach
        </div>
        @if (Auth::user()->personal)
            <button id="fab-exercice" data-target="exercice-creation-modal"
                class="btn-floating purple darken-4 fab fixed-bottom btn-large waves-effect waves-light modal-trigger">
                <i class="material-icons">add</i>
            </button>
        @endif
        <x-exercise-creation-modal />
    </div>
@endsection
