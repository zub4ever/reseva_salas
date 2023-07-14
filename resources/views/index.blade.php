@extends('layouts.master')
@section('title')
    @lang('translation.Dashboards')
@endsection
@section('css')

    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">

@endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
            Welcome !
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-2">
            <div class="card">
                <div class="card-header">
                    <div class="d-grid">
                        <a href="{{route('nova.reserva')}}">
                            <button class="btn font-16 btn-outline-primary" id="btn-new-event"><i
                                    class="mdi mdi-plus-circle-outline"></i> Criar novo agendamento
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-2">
            <div class="card">
                <div class="card-header">
                    <div class="d-grid">
                        <a href="{{route('inicioReserva')}}">
                            <button class="btn font-16 btn-outline-success" id="btn-new-event"><i
                                    class="mdi mdi-plus-circle-outline"></i> Reservas cadastradas
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
