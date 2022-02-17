<x-main-layout>
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

</x-main-layout>
