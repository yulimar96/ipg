{{-- @extends("theme.$theme.layout")
@section('titulo')
    Estadísticas
@stop
@section('styles')

@stop
@section('contenido')
<div class="row p-3 mx-auto">
    @foreach ($estados as $estado)
    <div class="col-lg-3">
        <div class="card elevation-4 text-white" style="background:{{$estado->color}}">
            <div class="card-header">
                
                <b>{{$estado->nombre}}</b>
            </div>
            <div class="card-body">
                <h3>0</h3>
                <strong>{{$hidrologica}} en el estado</strong>
            </div>
            <div class="card-footer">
                <a class="text-white" href="{{ route('e.show', ['id'=>$estado->id,'name'=>'hidrologica']) }}">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop
@section('scripts')

@endsection --}}