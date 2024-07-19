@extends('layouts.app', ['activePage' => 'Nuevos Pozos', 'titlePage' => __('Nuevos Pozos')])

@section('content')
    {{-- Modal --}}
    <div class="modal fade" id="creacion" tabindex="1" role="dialog" aria-labelledby="creacionLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content p-0">
                <div class="card mb-0 p-2">
                    <div class="card-header">
                        <h4 class=" text-center"><b>Ingrese los Datos del Nuevo Pozo Perforado</b></h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="bs-stepper linear">
                            <div class="bs-stepper-content">
                                <form action="{{ route('np.store') }}" method="post" enctype="multipart/form-data">
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

    {{-- Modal de edicion --}}

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="creacionLabel">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content p-0">
                <div class="card mb-0 p-2">
                    <div class="card-header">
                        <h3 class="card-title"><b>Yulimar esta loca</b></h3>
                    </div>
                    <div class="card-body p-0">
                        <h1>Hola</h1>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- Contenido -->
    <div class="row pt-4">
        <div class="col-12">   
            <div class="card">
                <div class="container-fluid">
                    <div class="row pt-4">
                        <div class="col-12">
                            <div class="card">
                       
                                <div class="card-header">
                                    <h5 class=" text-center">Detalles de la Perforación de los Nuevos Pozos</h5>
                                    <button class="btn shadow float-right bg-info" id="btn-creacion" data-toggle="modal"
                                        data-target="#creacion" name="Nueva MTA" style=" color:#ffff">
                                        Nuevo Pozo Perforado
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:5px">
                    <div class=" dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped dataTable dtr-inline bg-info"
                                    role="grid" aria-describedby="info">
                                    <thead class="text-center text-white">
                                        <tr>
                                            {{-- <th>Identificación</th> --}}
                                            <th>Nombre del Pozo</th>
                                            <th>Administrado</th>
                                            <th>Estado</th>
                                            <th>Municipio</th>
                                            {{-- <th>Parroquia</th>
                                            <th>Sector</th> --}}
                                            <th>Acciones</th>

                                        </tr>
                                    </thead>
                                    <!-- aqui va el thbody -->
                                    <tbody class="text-center">
                                        @foreach ($registros as $data)
                                            <tr>
                                                <td>{{ $data->nombre_pozo }}</td>
                                                <td>{{ $data->administrado }}</td>
                                                <td>{{ $data->estado }}</td>
                                                <td>{{ $data->municipio }}</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-Secondary" id="btn-edit"
                                                        data-toggle="modal" data-target="#edit" name="button" 
                                                        onclick="return confirm('Estás seguro que deseas editar el registro?');">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <a href="#" class="btn btn-primary"> 
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                    <a href="" class="btn btn-danger"
                                                        onclick="return confirm('Estás seguro que deseas eliminar el registro?');">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <script>
        // window.print();
        window.onload=function() {
		    var url = "{{ url('/extras/labels/estados') }}";
            $.get(url, function(data, status) {
                var $el = $("#estado");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text(
                    'SELECCIONE UNA OPCION...'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.id).text(
                        value.nombre));
                });
            }).fail(function() {
                console.log("Error");
            });	
		}
        function municipios(id) {
            var url = "{{ url('/extras/labels/municipios') }}";
            $.get(url, function(data, status) {
                var $el = $("#municipio");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text(
                    'SELECCIONE UNA OPCION...'));
                $.each(data, function(key, value) {
                    if (id == value.id_estado) {
                        $el.append($("<option></option>").attr("value", value.id).text(
                            value.nombre));
                    }
                });
            }).fail(function() {
                console.log("Error");
            });
        }

        function parroquias(id) {
            var url = "{{ url('/extras/labels/parroquias') }}";
            $.get(url, function(data, status) {
                console.log(data);
                var $el = $("#parroquia");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text(
                    'SELECCIONE UNA OPCION...'));
                $.each(data, function(key, value) {
                    if (id == value.id_municipios) {
                        $el.append($("<option></option>").attr("value", value.id).text(
                            value.nombre));
                    }
                });
            }).fail(function() {
                console.log("Error");
            });
        }
    </script>
@endpush
