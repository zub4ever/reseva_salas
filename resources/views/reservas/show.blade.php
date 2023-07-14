{{--@extends('layouts.master')--}}
{{--@section('content')--}}
{{--    @component('components.breadcrumb')--}}
{{--        @slot('li_1')--}}
{{--            Reservas--}}
{{--        @endslot--}}
{{--        @slot('title')--}}
{{--            Nova reserva--}}
{{--        @endslot--}}
{{--    @endcomponent--}}

@extends('layouts.master')
@section('title')
    Reservas
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Reservas
        @endslot
        @slot('title')
            Detalhes da Reserva
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-grid">
                                    @include('reservas.form-show')
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
