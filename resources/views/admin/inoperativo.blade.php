@extends('layouts.app', ['activePage' => 'Inoperativos', 'titlePage' => __('Inoperativos')])
@section('content')
    <!-- Contenido -->
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="container-fluid">
                    <div class="row pt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class=" text-center">Detalles de la Inoperatividad de los Pozos</h5>
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
                                            <th class="">Fecha de la Inoperatividad</th>
                                            <th class="">Estado</th>                                  
                                            <th class="">Habitantes Beneficiados</th>
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
@section('js')
    <script src="{{ asset('assets/lte/plugins/bs-stepper/js/bs-stepper.js') }}"></script>
    <script>
        function show_rehabi($view, $show, $modf, $instal) {
            if ($($show).is(':checked')) {
                $($view).show();
            } else {
                if ($modf && $instal) {
                    if ($($modf).is(':checked')) {
                        $check = document.querySelector($modf);
                        $check.checked = false;
                        $($instal).val('');
                        $($instal).hide();
                    }
                }
                $($view).val('');
                $($view).hide();
            }
        }
    </script>
    @endsection