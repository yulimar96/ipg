@extends('layouts.app_data', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __(config('app.name'))])
@push('css')
    <link href="{{ asset('css') }}/error_styles.css" rel="stylesheet" />
@endpush
@section('content')
    <div class="container" style="height: auto;">
        <div class="row justify-content-center">
            <div class="card col-lg-9 col-md-10">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 text-center">
                            <h1 class="text-center" style="text-size-adjust: 2rem !IMPORTANT;">ERROR</h1>
                            <h1 class="text-error">404</h1>
                        </div>
                        <div class="col-7 text-center">
                            <h3>
                                <strong>
                                    Lamentamos informarle que la pagina solicitada no se encuentra disponible, verifique su ruta de acceso e intente nuevamente.<br><br>
                                    Si su problema persiste contacte con soporte técnico.
                                </strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer mx-auto">
                    <a class="btn btn-primary mt-4" href="{{ route('home') }}">
                        <i class="material-icons text-white">keyboard_return</i>
                        Volver al Inicio
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
