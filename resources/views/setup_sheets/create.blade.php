@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="/setup-sheets">
                        @csrf

                        <div class="form-group row my-2">
                            <label for="fecha" class="col-md-4 col-form-label text-md-right">{{ __('Fecha') }}</label>

                            <div class="col-md-6">
                                <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" value="{{ old('fecha') }}"  autocomplete="fecha" autofocus>

                                @error('fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="auto" class="col-md-4 col-form-label text-md-right">{{ __('Auto') }}</label>

                            <div class="col-md-6">
                                <input id="auto" type="text" class="form-control @error('auto') is-invalid @enderror" name="auto" value="{{ old('auto') }}"  autocomplete="auto" autofocus>

                                @error('auto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="piloto" class="col-md-4 col-form-label text-md-right">{{ __('Piloto') }}</label>

                            <div class="col-md-6">
                                <input id="piloto" type="text" class="form-control @error('piloto') is-invalid @enderror" name="piloto" value="{{ old('piloto') }}"  autocomplete="piloto" autofocus>

                                @error('piloto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Repite este bloque para cada campo restante --}}
                        {{-- Por ejemplo, para el campo 'evento' --}}
                        <div class="form-group row my-2">
                            <label for="evento" class="col-md-4 col-form-label text-md-right">{{ __('Evento') }}</label>

                            <div class="col-md-6">
                                <input id="evento" type="text" class="form-control @error('evento') is-invalid @enderror" name="evento" value="{{ old('evento') }}"  autocomplete="evento" autofocus>

                                @error('evento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="clima" class="col-md-4 col-form-label text-md-right">{{ __('Clima') }}</label>

                            <div class="col-md-6">
                                <input id="clima" type="text" class="form-control @error('clima') is-invalid @enderror" name="clima" value="{{ old('clima') }}"  autocomplete="evento" autofocus>

                                @error('clima')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Superficie -->
                        <div class="form-group row my-2">
                            <label for="superficie" class="col-md-4 col-form-label text-md-right">{{ __('Superficie') }}</label>

                            <div class="col-md-6">
                                <input id="superficie" type="text" class="form-control @error('superficie') is-invalid @enderror" name="superficie" value="{{ old('superficie') }}"  autocomplete="superficie" autofocus>

                                @error('superficie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Suspension Front -->


                        <!-- Espirales Front -->
                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Suspension Front') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="espirales_front" class="col-md-4 col-form-label text-md-right">{{ __('Espirales') }}</label>

                            <div class="col-md-6">
                                <input id="espirales_front" type="text" class="form-control @error('espirales_front') is-invalid @enderror" name="espirales_front" value="{{ old('espirales_front') }}"  autocomplete="espirales_front" autofocus>

                                @error('espirales_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Amortiguadores Total Front -->
                        <div class="form-group row my-2">
                            <label for="amortiguadores_total_front" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>

                            <div class="col-md-6">
                                <input id="amortiguadores_total_front" type="text" class="form-control @error('amortiguadores_total_front') is-invalid @enderror" name="amortiguadores_total_front" value="{{ old('amortiguadores_total_front') }}"  autocomplete="amortiguadores_total_front" autofocus>

                                @error('amortiguadores_total_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Amortiguadores Baja Front -->
                        <div class="form-group row my-2">
                            <label for="amortiguadores_baja_front" class="col-md-4 col-form-label text-md-right">{{ __('Baja') }}</label>

                            <div class="col-md-6">
                                <input id="amortiguadores_baja_front" type="text" class="form-control @error('amortiguadores_baja_front') is-invalid @enderror" name="amortiguadores_baja_front" value="{{ old('amortiguadores_baja_front') }}"  autocomplete="amortiguadores_baja_front" autofocus>

                                @error('amortiguadores_baja_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Amortiguadores Alta Front -->
                        <div class="form-group row my-2">
                            <label for="amortiguadores_alta_front" class="col-md-4 col-form-label text-md-right">{{ __(' Alta') }}</label>

                            <div class="col-md-6">
                                <input id="amortiguadores_alta_front" type="text" class="form-control @error('amortiguadores_alta_front') is-invalid @enderror" name="amortiguadores_alta_front" value="{{ old('amortiguadores_alta_front') }}"  autocomplete="amortiguadores_alta_front" autofocus>

                                @error('amortiguadores_alta_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row my-2">
                            <label for="amortiguadores_exp_front" class="col-md-4 col-form-label text-md-right">{{ __('Exp') }}</label>

                            <div class="col-md-6">
                                <input id="amortiguadores_exp_front" type="text" class="form-control @error('amortiguadores_exp_front') is-invalid @enderror" name="amortiguadores_exp_front" value="{{ old('amortiguadores_exp_front') }}"  autocomplete="amortiguadores_exp_front" autofocus>

                                @error('amortiguadores_exp_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="valving_front" class="col-md-4 col-form-label text-md-right">{{ __('Valving') }}</label>

                            <div class="col-md-6">
                                <input id="valving_front" type="text" class="form-control @error('valving_front') is-invalid @enderror" name="valving_front" value="{{ old('valving_front') }}"  autocomplete="valving_front" autofocus>

                                @error('valving_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="barra_posicion_front" class="col-md-4 col-form-label text-md-right">{{ __('Barra/Posicion') }}</label>

                            <div class="col-md-6">
                                <input id="barra_posicion_front" type="text" class="form-control @error('barra_posicion_front_front') is-invalid @enderror" name="barra_posicion_front" value="{{ old('barra_posicion_front') }}"  autocomplete="barra_posicion_front" autofocus>

                                @error('barra_posicion_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!-- Suspension REAR -->
                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Suspension Rear') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="espirales_rear" class="col-md-4 col-form-label text-md-right">{{ __('Espirales') }}</label>

                            <div class="col-md-6">
                                <input id="espirales_rear" type="text" class="form-control @error('espirales_rear_front') is-invalid @enderror" name="espirales_rear" value="{{ old('espirales_rear') }}"  autocomplete="espirales_rear" autofocus>

                                @error('espirales_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="amortiguadores_total_rear" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>

                            <div class="col-md-6">
                                <input id="amortiguadores_total_rear" type="text" class="form-control @error('amortiguadores_total_rear_front') is-invalid @enderror" name="amortiguadores_total_rear" value="{{ old('amortiguadores_total_rear') }}"  autocomplete="amortiguadores_total_rear" autofocus>

                                @error('amortiguadores_total_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="amortiguadores_baja_rear" class="col-md-4 col-form-label text-md-right">{{ __('Baja') }}</label>

                            <div class="col-md-6">
                                <input id="amortiguadores_baja_rear" type="text" class="form-control @error('amortiguadores_baja_rear_front') is-invalid @enderror" name="amortiguadores_baja_rear" value="{{ old('amortiguadores_baja_rear') }}"  autocomplete="amortiguadores_baja_rear" autofocus>

                                @error('amortiguadores_baja_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="amortiguadores_alta_rear" class="col-md-4 col-form-label text-md-right">{{ __('Alta') }}</label>

                            <div class="col-md-6">
                                <input id="amortiguadores_alta_rear" type="text" class="form-control @error('amortiguadores_alta_rear_front') is-invalid @enderror" name="amortiguadores_alta_rear" value="{{ old('amortiguadores_alta_rear') }}"  autocomplete="amortiguadores_alta_rear" autofocus>

                                @error('amortiguadores_alta_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="amortiguadores_exp_rear" class="col-md-4 col-form-label text-md-right">{{ __('Exp') }}</label>

                            <div class="col-md-6">
                                <input id="amortiguadores_exp_rear" type="text" class="form-control @error('amortiguadores_exp_rear_front') is-invalid @enderror" name="amortiguadores_exp_rear" value="{{ old('amortiguadores_exp_rear') }}"  autocomplete="amortiguadores_exp_rear" autofocus>

                                @error('amortiguadores_exp_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="valving_rear" class="col-md-4 col-form-label text-md-right">{{ __('Valving') }}</label>

                            <div class="col-md-6">
                                <input id="valving_rear" type="text" class="form-control @error('valving_rear') is-invalid @enderror" name="valving_rear" value="{{ old('valving_rear') }}"  autocomplete="valving_rear" autofocus>

                                @error('valving_rear')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="barra_posicion_rear" class="col-md-4 col-form-label text-md-right">{{ __('Barra/Posicion') }}</label>

                            <div class="col-md-6">
                                <input id="barra_posicion_rear" type="text" class="form-control @error('barra_posicion_rear_front') is-invalid @enderror" name="barra_posicion_rear" value="{{ old('barra_posicion_rear') }}"  autocomplete="barra_posicion_rear" autofocus>

                                @error('barra_posicion_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Geometria / Alineacion FRONT -->

                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Geometria / Alineacion FRONT') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="convergencia_front" class="col-md-4 col-form-label text-md-right">{{ __('Convergencia') }}</label>

                            <div class="col-md-6">
                                <input id="convergencia_front" type="text" class="form-control @error('convergencia_front_front') is-invalid @enderror" name="convergencia_front" value="{{ old('convergencia_front') }}"  autocomplete="convergencia_front" autofocus>

                                @error('convergencia_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="comba_front" class="col-md-4 col-form-label text-md-right">{{ __('Comba') }}</label>

                            <div class="col-md-6">
                                <input id="comba_front" type="text" class="form-control @error('comba_front_front') is-invalid @enderror" name="comba_front" value="{{ old('comba_front') }}"  autocomplete="comba_front" autofocus>

                                @error('comba_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="avance_front" class="col-md-4 col-form-label text-md-right">{{ __('Avance') }}</label>

                            <div class="col-md-6">
                                <input id="avance_front" type="text" class="form-control @error('avance_front_front') is-invalid @enderror" name="avance_front" value="{{ old('avance_front') }}"  autocomplete="avance_front" autofocus>

                                @error('avance_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="altura_front" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>

                            <div class="col-md-6">
                                <input id="altura_front" type="text" class="form-control @error('altura_front_front') is-invalid @enderror" name="altura_front" value="{{ old('altura_front') }}"  autocomplete="altura_front" autofocus>

                                @error('altura_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Geometria / Alineacion REAR -->

                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Geometria / Alineacion Rear') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="convergencia_rear" class="col-md-4 col-form-label text-md-right">{{ __('Convergencia') }}</label>

                            <div class="col-md-6">
                                <input id="convergencia_rear" type="text" class="form-control @error('convergencia_rear_front') is-invalid @enderror" name="convergencia_rear" value="{{ old('convergencia_rear') }}"  autocomplete="convergencia_rear" autofocus>

                                @error('convergencia_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="comba_rear" class="col-md-4 col-form-label text-md-right">{{ __('Comba') }}</label>

                            <div class="col-md-6">
                                <input id="comba_rear" type="text" class="form-control @error('comba_rear_front') is-invalid @enderror" name="comba_rear" value="{{ old('comba_rear') }}"  autocomplete="comba_rear" autofocus>

                                @error('comba_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="avance_rear" class="col-md-4 col-form-label text-md-right">{{ __('Avance') }}</label>

                            <div class="col-md-6">
                                <input id="avance_rear" type="text" class="form-control @error('avance_rear_front') is-invalid @enderror" name="avance_rear" value="{{ old('avance_rear') }}"  autocomplete="avance_rear" autofocus>

                                @error('avance_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="altura_rear" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>

                            <div class="col-md-6">
                                <input id="altura_rear" type="text" class="form-control @error('altura_rear_front') is-invalid @enderror" name="altura_rear" value="{{ old('altura_rear') }}"  autocomplete="altura_rear" autofocus>

                                @error('altura_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- FRENOS -->

                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Frenos FRONT') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="pastillas_front" class="col-md-4 col-form-label text-md-right">{{ __('Pastillas') }}</label>

                            <div class="col-md-6">
                                <input id="pastillas_front" type="text" class="form-control @error('pastillas_front_front') is-invalid @enderror" name="pastillas_front" value="{{ old('pastillas_front') }}"  autocomplete="pastillas_front" autofocus>

                                @error('pastillas_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="liquido_front" class="col-md-4 col-form-label text-md-right">{{ __('Liquido') }}</label>

                            <div class="col-md-6">
                                <input id="liquido_front" type="text" class="form-control @error('liquido_front_front') is-invalid @enderror" name="liquido_front" value="{{ old('liquido_front') }}"  autocomplete="liquido_front" autofocus>

                                @error('liquido_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="balance_front" class="col-md-4 col-form-label text-md-right">{{ __('Balance') }}</label>

                            <div class="col-md-6">
                                <input id="balance_front" type="text" class="form-control @error('balance_front_front') is-invalid @enderror" name="balance_front" value="{{ old('balance_front') }}"  autocomplete="balance_front" autofocus>

                                @error('balance_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- FRENOS REAR -->

                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Frenos Rear') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="pastillas_rear" class="col-md-4 col-form-label text-md-right">{{ __('Pastillas') }}</label>

                            <div class="col-md-6">
                                <input id="pastillas_rear" type="text" class="form-control @error('pastillas_rear_front') is-invalid @enderror" name="pastillas_rear" value="{{ old('pastillas_rear') }}"  autocomplete="pastillas_rear" autofocus>

                                @error('pastillas_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="liquido_rear" class="col-md-4 col-form-label text-md-right">{{ __('Liquido') }}</label>

                            <div class="col-md-6">
                                <input id="liquido_rear" type="text" class="form-control @error('liquido_rear_front') is-invalid @enderror" name="liquido_rear" value="{{ old('liquido_rear') }}"  autocomplete="liquido_rear" autofocus>

                                @error('liquido_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="balance_rear" class="col-md-4 col-form-label text-md-right">{{ __('Balance') }}</label>

                            <div class="col-md-6">
                                <input id="balance_rear" type="text" class="form-control @error('balance_rear_front') is-invalid @enderror" name="balance_rear" value="{{ old('balance_rear') }}"  autocomplete="balance_rear" autofocus>

                                @error('balance_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Transmision FRONT -->

                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Transmision FRONT') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="diferenciales_front" class="col-md-4 col-form-label text-md-right">{{ __('Diferencial') }}</label>

                            <div class="col-md-6">
                                <input id="diferenciales_front" type="text" class="form-control @error('diferenciales_front_front') is-invalid @enderror" name="diferenciales_front" value="{{ old('diferenciales_front') }}"  autocomplete="diferenciales_front" autofocus>

                                @error('diferenciales_front_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Transmision REAR -->

                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Transmision Rear') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="diferenciales_rear" class="col-md-4 col-form-label text-md-right">{{ __('Diferencial') }}</label>

                            <div class="col-md-6">
                                <input id="diferenciales_rear" type="text" class="form-control @error('diferenciales_rear_front') is-invalid @enderror" name="diferenciales_rear" value="{{ old('diferenciales_rear') }}"  autocomplete="diferenciales_rear" autofocus>

                                @error('diferenciales_rear_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Combustible') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="combustible_litros" class="col-md-4 col-form-label text-md-right">{{ __('Litros') }}</label>

                            <div class="col-md-6">
                                <input id="combustible_litros" type="text" class="form-control @error('combustible_litros_front') is-invalid @enderror" name="combustible_litros" value="{{ old('combustible_litros') }}"  autocomplete="combustible_litros" autofocus>

                                @error('combustible_litros_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="combustible_tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <div class="col-md-6">
                                <input id="combustible_tipo" type="text" class="form-control @error('combustible_tipo_front') is-invalid @enderror" name="combustible_tipo" value="{{ old('combustible_tipo') }}"  autocomplete="combustible_tipo" autofocus>

                                @error('combustible_tipo_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="bg-warning text-dark font-weight-bold p-2"">{{ __('Neumáticos') }}</div>
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="neumaticos_marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

                            <div class="col-md-6">
                                <input id="neumaticos_marca" type="text" class="form-control @error('neumaticos_marca_front') is-invalid @enderror" name="neumaticos_marca" value="{{ old('neumaticos_marca') }}"  autocomplete="neumaticos_marca" autofocus>

                                @error('neumaticos_marca_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="neumaticos_medida" class="col-md-4 col-form-label text-md-right">{{ __('Medida') }}</label>

                            <div class="col-md-6">
                                <input id="neumaticos_medida" type="text" class="form-control @error('neumaticos_medida_front') is-invalid @enderror" name="neumaticos_medida" value="{{ old('neumaticos_medida') }}"  autocomplete="neumaticos_medida" autofocus>

                                @error('neumaticos_medida_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="neumaticos_comp" class="col-md-4 col-form-label text-md-right">{{ __('Compuesto') }}</label>

                            <div class="col-md-6">
                                <input id="neumaticos_comp" type="text" class="form-control @error('neumaticos_comp_front') is-invalid @enderror" name="neumaticos_comp" value="{{ old('neumaticos_comp') }}"  autocomplete="neumaticos_comp" autofocus>

                                @error('neumaticos_comp_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="neumaticos_calibracion" class="col-md-4 col-form-label text-md-right">{{ __('Calibracion') }}</label>

                            <div class="col-md-6">
                                <input id="neumaticos_calibracion" type="text" class="form-control @error('neumaticos_calibracion_front') is-invalid @enderror" name="neumaticos_calibracion" value="{{ old('neumaticos_calibracion') }}"  autocomplete="neumaticos_calibracion" autofocus>

                                @error('neumaticos_calibracion_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="extra_notas" class="col-md-4 col-form-label text-md-right">{{ __('Extra notas') }}</label>

                            <div class="col-md-6">
                                <textarea id="extra_notas" class="form-control @error('extra_notas_front') is-invalid @enderror" name="extra_notas"  autocomplete="extra_notas" autofocus>{{ old('extra_notas') }}</textarea>

                                @error('extra_notas_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
