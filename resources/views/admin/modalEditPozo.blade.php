@extends('layouts.app', ['activePage' => 'Editar Pozo', 'titlePage' => __('Editar Pozo')])

@section('content')
<div class="modal" id="edit" tabindex="-1" style="text-transform: uppercase;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="mx-auto pl-5">
                    <h5 class="modal-title ml-5 pl-3">Registro de Correspondencia Enviada</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="GET" id="editPozo" enctype="multipart/form-data">
                @csrf
                <div id="datos-part" class="content active" role="tabpanel"
                    aria-labelledby="datos-part-trigger">

                    <div class="form-group row col-auto  mt-4">
                        <div class="mx-auto">
                            <label for="nompozo">Nombre del Pozo</label>
                            <input class="form-control" type="text" name="nombre_pozo"
                                placeholder="POZO KM.50">
                        </div>
                        <div class="mx-auto">
                            <label for="fperforacion">Fecha de Perforación</label>
                            <input class="form-control" type="date" name="fperforacion">
                        </div>
                        <div class="form-group col-3 ml-2 mx-auto">
                            <label for="administrado">Administrado Por</label>
                            <select class="form-control" name="administrado">
                                <option selected disabled>Seleccione una Opción</option>
                                <option value="domestico">Hidrológica</option>
                                <option value="comercial">Privado</option>
                            </select>
                        </div>
                        <div class="col-2 ml-2 mx-auto">
                            <label for="produccion">Producción</label>
                            <input class="form-control" name="produccion" type="number"
                                placeholder="0001">
                        </div>
                        <div class="ml-2 mx-auto">
                            <label for="habitantes">Habitantes Beneficiados</label>
                            <input class="form-control" name="habitantes_beneficiados" type="number"
                                placeholder="152901">
                        </div>
                    </div>
                    <div class="row ml-2 mt-3">
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
                            <h6><b> Ingrese las Especificaciones del Motor</b> </h6>
                            <hr>
                        </div>
                        <div class="form-group row mt-4">

                            <div class=" ml-4 mx-auto ">
                                <label class="col-12" for="hpmotor">HP (Caballos de Fuerzas)</label>
                                <input class="form-control" name="hpmotor" type="number"
                                    placeholder="20">
                            </div>
                            <div class="col-2 mx-auto ">
                                <label class="1 ml-4" for="voltaje">Voltaje (Voltio)</label>
                                <input class="form-control 1 ml-3" type="number" name="voltaje"
                                    placeholder="430">
                            </div>

                            <div class="col-4 mx-auto ">
                                <label class="1 ml-4" for="tipovoltaje">Tipo de Voltaje</label>
                                <select class="form-control" name="tipovoltaje">
                                    <option selected disabled>Seleccione una Opción</option>
                                    <option value="monofasico">Monofásico</option>
                                    <option value="trifasico">Trifásico</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center ">
                            <hr>
                            <h6><b> Ingrese las Especificaciones de la Bomba</b> </h6>
                            <hr>
                        </div>
                        <div class="form-group row col-12 mt-4 ml-1">
                            <div class="ml-3 mx-auto">
                                <label for="modelo">Modelo</label>
                                <input class="form-control" class="form-control" name="modelo"
                                    type="number" placeholder="100SR20F66-1363">
                            </div>
                            <div class="col-auto ml-3 mx-auto">
                                <label for="hpbomba">HP (Caballos de Fuerzas)</label>
                                <input class="form-control" name="hpbomba" type="number"
                                    placeholder="20">
                            </div>
                            <div class="col-2 mx-auto">
                                <label for="caudal">Caudal (m³/s)</label>
                                <input class="form-control" type="string" name="caudal"
                                    placeholder="99">
                            </div>
                            <div class="ml-2 mx-auto">
                                <label for="altura">Altura (Metros)</label>
                                <input class="form-control" type="number" name="altura"
                                    placeholder="15">
                            </div>
                            <div class="ml-3 mx-auto">
                                <label for="diametro">Diámetro (Metros)</label>
                                <input class="form-control" type="number" name="diametro"
                                    placeholder="13">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="Cerrar">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('js')
    <script>
    $(function() {
    $('.selectMultiple').select2()
    });

    function modalEdit(id, type, asunto) {
        var url = "/npozo/update/" + type + "/" + id + "/";
        // $("#editSend").attr("action", url);
        // $("#asuntoSend").text(asunto);
    }
    </script>
@endpush
