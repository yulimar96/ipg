@extends('layouts.app', ['activePage' => 'Mantenimiento', 'titlePage' => __('Mantenimiento')])
@section('content')
    {{-- Modal --}}
    <div class="modal fade" id="creacion" tabindex="-1" role="dialog" aria-labelledby="creacionLabel">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content p-0">
                <div class="card mb-0 p-2">
                    <div class="card-header">
                        <h4 class=" text-center"><b>Ingrese los Datos del Nuevo Pozo en Mantenimiento</b></h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="bs-stepper linear">
                            <div class="bs-stepper-content">
                                <form action="" method="#" enctype="multipart/form-data">
                                    @csrf
                                    <div id="datos-part" class="content active" role="tabpanel"
                                        aria-labelledby="datos-part-trigger">

                                        <div class="form-group row col-auto  mt-4 mx-auto">
                                            <div class="mx-auto ">
                                                <label>Identificación del Pozo</label>
                                                <input class="form-control" type="text" name="identificador"
                                                    placeholder="YAR020009H">
                                            </div>
                                            <div class="mx-auto ">
                                                <label for="hidrologica">Nombre del Pozo</label>
                                                <input class="form-control" type="text" name="hidrologica"
                                                    placeholder="COBRE">
                                            </div>
                                            <div class="mx-auto ml-4">
                                                <label for="h">Fecha de Mantenimiento</label>
                                                <input class="form-control" name="h" id="hp" type="date">
                                            </div>
                                        </div>
                                        <div class="row ml-5 mt-3">
                                            <div class="form-group col-3">
                                                <label for="estado">Estado</label>
                                                <select name="estado" id="estado" class="form-control"
                                                    onchange="municipios(this.value)">
                                                </select>
                                            </div>
                                            <div class="form-group col-3 ">
                                                <label for="municipio">Municipio</label>
                                                <select name="municipio" id="municipio" class="form-control"
                                                    onchange="parroquias(this.value)">
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="parroquia">Parroquia</label>
                                                <select name="parroquia" id="parroquia" class="form-control">
                                                </select>
                                            </div>
                                            <div class="form-group col-2">
                                                <label for="sector">Sector</label>
                                                <input class="form-control" type="text" name="sector">
                                            </div>
                                        </div>
                                        <div id="part" class="content" role="tabpanel" aria-labelledby="part-trigger">
                                            {{-- Datos Referenciales y Técnicos --}}
                                            <div class="text-center ">
                                                <hr>
                                                <h4><b> Ingrese las Actividades Realizadas</b> </h4>
                                                <hr>
                                            </div>
                                            <div class="form-group row mt-4">
                                                <div class="form-group ml-5">
                                                    <label>Intervencion de Equipos</label>
                                                    <div class="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Si
                                                            </label>
                                                        </div>
                                                        <div class="form-check ml-2">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckChecked">
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ml-5">
                                                <label>Limpieza del Pozo</label>
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Si
                                                        </label>
                                                    </div>
                                                    <div class="form-check ml-2">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ml-5">
                                                <label>Desmalezamiento de Áreas Dañadas</label>
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Si
                                                        </label>
                                                    </div>
                                                    <div class="form-check ml-2">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ml-5">
                                                <label>Pintura de Instalaciones</label>
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Si
                                                        </label>
                                                    </div>
                                                    <div class="form-check ml-2">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ml-5">
                                                <label>Iluminación, Cercado y Protección</label>
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Si
                                                        </label>
                                                    </div>
                                                    <div class="form-check ml-2">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer row col-auto ml-5 pt-3">
                                                <button type="submit" class="btn bg-primary" id="btn-nuevo">
                                                    Agregar
                                                </button>
                                                <input class="btn bg-info" type="reset" value="Limpiar">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    Cancelar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin de Modal --}}
    <!-- Contenido -->
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="container-fluid">
                    <div class="row pt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class=" text-center">Detalles de los Nuevos Pozos en Mantenimiento</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:5px">
                    <div class=" dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped dataTable dtr-inline bg-info" role="grid"
                                    aria-describedby="info">
                                    <thead class="text-center text-white">
                                        <tr>
                                            <th class="">Identificación</th>
                                            <th class="">Nombre del Pozo</th>
                                            <th class="">Fecha de Mantenimiento</th>
                                            <th class="">Intervención de Equipos</th>                                            
                                            <th class="">Acciones</th>
                                        </tr>
                                    </thead>
                                    <!-- aqui va el thbody -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
