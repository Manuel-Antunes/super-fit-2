@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="col xl container p-5">
        <h1 class="display-3">Login</h1>
        <form class="row g-3" action="{{ route('login') }}" method="POST">
            <div class="input-field w-100">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="input-field w-100">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input type="password" name="password" class="form-control" id="inputPassword4">
            </div>
            <p class="lead">Se ainda não faz parte dessa familia poderosa,
                <a href="/sign-up">cadastre-se agora</a>, e mude sua vida!
            </p>
            <div>
                <button type="submit" class="w-100 waves-effect waves-light btn-large purple darken-4">Entrar</button>
            </div>
        </form>
    </div>
@endsection
