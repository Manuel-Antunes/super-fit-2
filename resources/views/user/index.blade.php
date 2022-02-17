@extends('layouts.main')

@section('title', 'Usuários')

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

@section('content')
    <div class="container-fluid mt-4">
        <h1 class="display-3">Usuários Cadastrados</h1>

        <div class="row">
            <div class="col-12 col-md-4 col-sm-6 col-lg-4">
                <canvas id="users-chart"></canvas>
            </div>
            <div class="col overflow-auto mb-3">
                <table class="table w-100 table-bordered table-hover table-checkable table-dark" id="user-table"
                    style="margin-top: 13px !important">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Gênero</th>
                            <th>Data de Nascimento</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('aditional-scripts')
    <script src="{{ asset('chart.js/chart.js') }}"></script>
    <script src="{{ asset('datatables.net-dt/dataTables.dataTables.min.js') }}"></script>
    <script src="js/pages/users.js"></script>
@endsection
