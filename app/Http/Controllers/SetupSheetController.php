<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SetupSheet;
use Illuminate\Validation\Rule;


class SetupSheetController extends Controller
{

    protected function getCreationValidationRules()
    {
        return [
            'piloto' => 'required|max:255|unique:setup_sheets,piloto,NULL,id,auto,' . request()->input('auto'),
            'auto' => 'required|string|max:255|unique:setup_sheets,auto,NULL,id,piloto,' . request()->input('piloto'),
            'fecha' => 'nullable|date',
            'evento' => 'nullable|string|max:255',
            'clima' => 'nullable|string|max:255',
            'superficie' => 'nullable|string|max:255',
            'espirales_front' => 'nullable|string|max:255',
            'amortiguadores_total_front' => 'nullable|string|max:255',
            'amortiguadores_baja_front' => 'nullable|string|max:255',
            'amortiguadores_alta_front' => 'nullable|string|max:255',
            'amortiguadores_exp_front' => 'nullable|string|max:255',
            'valving_front' => 'nullable|string|max:255',
            'barra_posicion_front' => 'nullable|string|max:255',
            'espirales_rear' => 'nullable|string|max:255',
            'amortiguadores_total_rear' => 'nullable|string|max:255',
            'amortiguadores_baja_rear' => 'nullable|string|max:255',
            'amortiguadores_alta_rear' => 'nullable|string|max:255',
            'amortiguadores_exp_rear' => 'nullable|string|max:255',
            'valving_rear' => 'nullable|string|max:255',
            'barra_posicion_rear' => 'nullable|string|max:255',
            'convergencia_front' => 'nullable|string|max:255',
            'comba_front' => 'nullable|string|max:255',
            'avance_front' => 'nullable|string|max:255',
            'altura_front' => 'nullable|string|max:255',
            'convergencia_rear' => 'nullable|string|max:255',
            'comba_rear' => 'nullable|string|max:255',
            'avance_rear' => 'nullable|string|max:255',
            'altura_rear' => 'nullable|string|max:255',
            'pastillas_front' => 'nullable|string|max:255',
            'liquido_front' => 'nullable|string|max:255',
            'balance_front' => 'nullable|string|max:255',
            'pastillas_rear' => 'nullable|string|max:255',
            'liquido_rear' => 'nullable|string|max:255',
            'balance_rear' => 'nullable|string|max:255',
            'diferenciales_front' => 'nullable|string|max:255',
            'diferenciales_rear' => 'nullable|string|max:255',
            'combustible_litros' => 'nullable|string|max:255',
            'combustible_tipo' => 'nullable|string|max:255',
            'neumaticos_marca' => 'nullable|string|max:255',
            'neumaticos_medida' => 'nullable|string|max:255',
            'neumaticos_comp' => 'nullable|string|max:255',
            'neumaticos_calibracion' => 'nullable|string|max:255',
            'extra_notas' => 'nullable',
        ];
    }

    protected function getUpdateValidationRules($auto, $piloto)
    {
        return [
            'piloto' => 'required|max:255|unique:setup_sheets,piloto,' . $piloto . ',piloto,auto,' . $auto,
            'auto' => 'required|string|max:255|unique:setup_sheets,auto,' . $auto . ',auto,piloto,' . $piloto,
            'fecha' => 'nullable|date',
            'evento' => 'nullable|string|max:255',
            'clima' => 'nullable|string|max:255',
            'superficie' => 'nullable|string|max:255',
            'espirales_front' => 'nullable|string|max:255',
            'amortiguadores_total_front' => 'nullable|string|max:255',
            'amortiguadores_baja_front' => 'nullable|string|max:255',
            'amortiguadores_alta_front' => 'nullable|string|max:255',
            'amortiguadores_exp_front' => 'nullable|string|max:255',
            'valving_front' => 'nullable|string|max:255',
            'barra_posicion_front' => 'nullable|string|max:255',
            'espirales_rear' => 'nullable|string|max:255',
            'amortiguadores_total_rear' => 'nullable|string|max:255',
            'amortiguadores_baja_rear' => 'nullable|string|max:255',
            'amortiguadores_alta_rear' => 'nullable|string|max:255',
            'amortiguadores_exp_rear' => 'nullable|string|max:255',
            'valving_rear' => 'nullable|string|max:255',
            'barra_posicion_rear' => 'nullable|string|max:255',
            'convergencia_front' => 'nullable|string|max:255',
            'comba_front' => 'nullable|string|max:255',
            'avance_front' => 'nullable|string|max:255',
            'altura_front' => 'nullable|string|max:255',
            'convergencia_rear' => 'nullable|string|max:255',
            'comba_rear' => 'nullable|string|max:255',
            'avance_rear' => 'nullable|string|max:255',
            'altura_rear' => 'nullable|string|max:255',
            'pastillas_front' => 'nullable|string|max:255',
            'liquido_front' => 'nullable|string|max:255',
            'balance_front' => 'nullable|string|max:255',
            'pastillas_rear' => 'nullable|string|max:255',
            'liquido_rear' => 'nullable|string|max:255',
            'balance_rear' => 'nullable|string|max:255',
            'diferenciales_front' => 'nullable|string|max:255',
            'diferenciales_rear' => 'nullable|string|max:255',
            'combustible_litros' => 'nullable|string|max:255',
            'combustible_tipo' => 'nullable|string|max:255',
            'neumaticos_marca' => 'nullable|string|max:255',
            'neumaticos_medida' => 'nullable|string|max:255',
            'neumaticos_comp' => 'nullable|string|max:255',
            'neumaticos_calibracion' => 'nullable|string|max:255',
            'extra_notas' => 'nullable',
        ];
    }

    public function index()
    {
        $setupSheets = SetupSheet::all();
        return view('setup_sheets.index', compact('setupSheets'));
    }

    public function create()
    {
        return view('setup_sheets.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->getCreationValidationRules());
        SetupSheet::create($validatedData);
        return redirect()->route('setup_sheets.index')->with('success', 'Setup sheet created successfully.');
    }

    public function show($auto, $piloto)
    {
        $piloto = urldecode($piloto);
        $auto = urldecode($auto);

        $setupSheet = SetupSheet::where('auto', $auto)
                                ->where('piloto', $piloto)
                                ->firstOrFail();

        return view('setup_sheets.show', compact('setupSheet'));
    }

    public function edit($auto, $piloto)
    {
        $piloto = urldecode($piloto);
        $auto = urldecode($auto);

        $setupSheet = SetupSheet::where('auto', $auto)
                                ->where('piloto', $piloto)
                                ->firstOrFail();

        return view('setup_sheets.edit', compact('setupSheet'));
    }

    public function update(Request $request, $auto, $piloto)
    {
        $piloto = urldecode($piloto);
        $auto = urldecode($auto);

        $validatedData = $request->validate($this->getUpdateValidationRules($auto, $piloto));

        $setupSheet = SetupSheet::where('auto', $auto)
                                ->where('piloto', $piloto)
                                ->firstOrFail();

        $setupSheet->update($validatedData);

        // Redirecciona a la página de detalles del registro actualizado
        return redirect()->route('setup_sheets.show', ['auto' => $auto, 'piloto' => $piloto])
                            ->with('success', 'Registro actualizado exitosamente.');
    }

}
