@extends('layouts.app_data', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __(config('app.name'))])
@push('css')
    <link href="{{ asset('css') }}/error_styles.css" rel="stylesheet" />
@endpush
@section('content')
    <div class="container" style="height: auto;">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12">
            </div>
            <div class="card col-lg-9 col-md-10">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 text-center">
                            <h1 class="text-center" style="text-size-adjust: 2rem !IMPORTANT;">ERROR</h1>
                            <h1 class="text-error">419</h1>
                        </div>
                        <div class="col-7 text-center">
                            <h3>
                                <strong>
                                    Su token de seguridad ha espirado, pulse <strong>Actualizar</strong> e intente nuevamente.
                                </strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer mx-auto">
                    <a class="btn btn-primary mt-4" href="{{ route('home') }}">
                        <i class="material-icons text-white">published_with_changes</i>
                        Actualizar
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="{{ asset('js') }}/errors.js"></script>
@endpush
