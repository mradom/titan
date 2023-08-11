@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="header">
        <h1>Setup Sheet</h1>
    </div>
    <div class="row">
        <div class="col-md-2">Auto: {{ strtoupper($setupSheet->auto) }}</div>
        <div class="col-md-2">Piloto: {{ strtoupper($setupSheet->piloto) }}</div>
        <div class="col-md-2">Fecha: {{ strtoupper($setupSheet->fecha) }}</div>
        <div class="col-md-2">Evento: {{ strtoupper($setupSheet->evento) }}</div>
        <div class="col-md-2">Clima: {{ strtoupper($setupSheet->clima) }}</div>
        <div class="col-md-2">Superficie: {{ strtoupper($setupSheet->superficie) }}</div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="section-title">Front</h3>
            <h5>Suspensión</h5>
            <table class="table table-striped">
                <tr><td>Espirales</td><td>{{ $setupSheet->espirales_front }}</td></tr>
                <tr><td>Amortiguadores</td><td>BAJA {{ $setupSheet->amortiguadores_baja_front }} / ALTA {{ $setupSheet->amortiguadores_alta_front }} / EXP {{ $setupSheet->amortiguadores_exp_front }}</td></tr>
                <tr><td>Total Reg.</td><td>{{ $setupSheet->amortiguadores_total_front }} / {{ $setupSheet->amortiguadores_baja_front }} / {{ $setupSheet->amortiguadores_alta_front }}</td></tr>
                <tr><td>Valving</td><td>{{ $setupSheet->valving_front }}</td></tr>
                <tr><td>Barra / Posición</td><td>{{ $setupSheet->barra_posicion_front }}</td></tr>
                <tr><td>Convergencia</td><td>{{ $setupSheet->convergencia_front }}</td></tr>
                <tr><td>Comba</td><td>{{ $setupSheet->comba_front }}</td></tr>
                <tr><td>Avance</td><td>{{ $setupSheet->avance_front }}</td></tr>
                <tr><td>Altura</td><td>{{ $setupSheet->altura_front }}</td></tr>
            </table>
        </div>
        <div class="col-md-6">
            <h3 class="section-title">Rear</h3>
            <h5>Suspensión</h5>
            <table class="table table-striped">
                <tr><td>Espirales</td><td>{{ $setupSheet->espirales_rear }}</td></tr>
                <tr><td>Amortiguadores</td><td>{{ $setupSheet->amortiguadores_total_rear }} / {{ $setupSheet->amortiguadores_baja_rear }} / {{ $setupSheet->amortiguadores_alta_rear }} / {{ $setupSheet->amortiguadores_exp_rear }}</td></tr>
                <tr><td>Total Reg.</td><td>{{ $setupSheet->amortiguadores_total_rear }} / {{ $setupSheet->amortiguadores_baja_rear }} / {{ $setupSheet->amortiguadores_alta_rear }}</td></tr>
                <tr><td>Valving</td><td>{{ $setupSheet->valving_rear }}</td></tr>
                <tr><td>Barra / Posición</td><td>{{ $setupSheet->barra_posicion_rear }}</td></tr>
                <tr><td>Convergencia</td><td>{{ $setupSheet->convergencia_rear }}</td></tr>
                <tr><td>Comba</td><td>{{ $setupSheet->comba_rear }}</td></tr>
                <tr><td>Avance</td><td>{{ $setupSheet->avance_rear }}</td></tr>
                <tr><td>Altura</td><td>{{ $setupSheet->altura_rear }}</td></tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 class="section-title">Frenos</h3>
            <table class="table table-striped">
                <tr><td>Pastillas</td><td>{{ $setupSheet->pastillas_front }}</td></tr>
                <tr><td>Liquido</td><td>{{ $setupSheet->liquido_front }}</td></tr>
                <tr><td>Balance</td><td>{{ $setupSheet->balance_front }}</td></tr>
            </table>
        </div>
        <div class="col-md-4">
            <h3 class="section-title">Trasmisión</h3>
            <table class="table table-striped">
                <tr><td>Diferenciales</td><td>{{ $setupSheet->diferenciales_front }}</td></tr>
            </table>
        </div>
        <div class="col-md-4">
            <h3 class="section-title">Combustible</h3>
            <table class="table table-striped">
                <tr><td>Litros</td><td>{{ $setupSheet->combustible_litros }}</td></tr>
                <tr><td>Tipo</td><td>{{ $setupSheet->combustible_tipo }}</td></tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="section-title">Neumáticos</h3>
            <table class="table table-striped">
                <tr><td>Marca</td><td>{{ $setupSheet->neumaticos_marca }}</td></tr>
                <tr><td>Medida</td><td>{{ $setupSheet->neumaticos_medida }}</td></tr>
                <tr><td>Comp.</td><td>{{ $setupSheet->neumaticos_comp }}</td></tr>
                <tr><td>Calibración</td><td>{{ $setupSheet->neumaticos_calibracion }}</td></tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="section-title">Extra/Notas</h3>
            <textarea class="form-control" rows="4">{{ $setupSheet->extra_notas }}</textarea>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f8f9fa;
        text-transform: uppercase;
    }
    .header {
        background-color: #F2CC11;
        color: #000000;
        padding: 20px;
        text-align: center;
    }
    .section-title {
        background-color: #F2CC11;
        color: #010101;
        padding: 5px;
        text-align: center;
        margin-top: 30px;
    }
    .table th,
    .table td {
        border-color: #e9ecef;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(245, 105, 32, 0.05);
    }
</style>
@endsection