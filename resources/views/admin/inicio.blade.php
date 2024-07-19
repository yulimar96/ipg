@extends('layouts.app', ['activePage' => 'Inicio', 'titlePage' => __('Inicio')])
@section('content')
<div class="row mr-10 pt-4 pb-5">
    <div class="col">
        <div class="card h-100 w-75 text-white" style="background: rgb(130, 152, 233) !important">
            <div class="card-header">
                <strong>Pozos a Nivel Nacional</strong>
            </div>
            <div class="card-body my-0 py-0 mt-4">
                <div class="row">
                    <div class="col text-center">
                        <h1>1</h1>
                    </div>
                </div>
            </div>
            <div class="card-footer p-2 text-right">
                <a href="#" class="text-white-50">Ver Detalles</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100 w-75 text-white" style="background: rgb(122, 130, 189) !important">
            <div class="card-header">
                <strong>Pozos por Hidrológica</strong>
            </div>
            <div class="card-body my-0 py-0 mt-4">
                <div class="row">
                    <div class="col text-center">
                        <h1>2</h1>
                    </div>
                   
                </div>
            </div>
            <div class="card-footer p-2 text-right">
                <a href="#" class="text-white-50">Ver Detalles</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card h-100 w-75 text-white" style="background: rgb(45, 108, 195) !important"style="background: rgb(95, 13, 209) !important">
            <div class="card-header">
                <strong>Pozos en Rehabilitación</strong>
            </div>
            <div class="card-body my-0 py-0 mt-4">
                <div class="row">
                    <div class="col text-center">
                        <h1>3</h1>
                    </div>
                    
                </div>
            </div>
            <div class="card-footer p-2 text-right">
                <a href="{{ route('rehabilitado') }}" class="text-white-50">Ver Detalles</a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col">
        <div class="card h-100 w-75 text-white" style="background: rgb(20, 104, 127) !important">
            <div class="card-header">
                <strong>Pozos en Mantenimiento</strong>
            </div>
            <div class="card-body my-0 py-0 mt-4">
                <div class="row">
                    <div class="col text-center">
                        <h1>4</h1>
                    </div>
                   
                </div>
            </div>
            <div class="card-footer p-2 text-right">
                <a href="{{ route('mantenimiento') }}" class="text-white-50">Ver Detalles</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100 w-75 text-white" style="background: rgb(17, 121, 120) !important">
            <div class="card-header">
                <strong> Pozos Inoperativos</strong>
            </div>
            <div class="card-body my-0 py-0 mt-4">
                <div class="row">
                    <div class="col text-center">
                        <h1>5</h1>
                    </div>
                    
                </div>
            </div>
            <div class="card-footer p-2 text-right">
                <a href="{{ route('inoperativo') }}" class="text-white-50">Ver Detalles</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100 w-75 text-white" style="background: rgb(6, 129, 151) !important">
            <div class="card-header">
                <strong>Nuevos Pozos (Último Mes)</strong>
            </div>
            <div class="card-body my-0 py-0 mt-4">
                <div class="row">
                    <div class="col text-center">
                        <h1>6</h1>
                    </div>
                   
                </div>
            </div>
            <div class="card-footer p-2 text-right">
                <a href="#" class="text-white-50">Ver Detalles</a>
            </div>
        </div>
    </div>
</div>

@stop

