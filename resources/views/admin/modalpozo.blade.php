@extends('layouts.app', ['activePage' => 'Nuevos Pozos', 'titlePage' => __('Nuevos Pozos')])

@section('content')
    {{-- Modal --}}
    @include('admin/modalPozo')
    @include('admin/modalEditPozo')
    <div class="container-fluid pt-4 mb-3">
        <div class="row" style="text-transform: uppercase;">
            {{-- Header --}}
            <div class="card-header col-12">
                <div class="float-left">
                    <h4>CORRESPONDENCIA ENVIADA</h4>
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-success" id="btn-creacion" data-toggle="modal" data-target="#send"
                        name="button">NUEVA CORRESPONDENCIA</button>
                </div>
            </div>
     
    @include('tablePozo')

    @push('js')
    @include('scripts/Pozo')
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
    <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();
            });
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