@extends('layouts.master')
@section('title')
    Edição
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Reservas
        @endslot
        @slot('title')
            Criar nova reserva
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-grid">

                                <form action="{{route('reservas.update', $reservas->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    @include('reservas.form')
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/alert.init.js') }}"></script>
@endsection
