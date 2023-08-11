<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SetupSheet;

class SetupSheetController extends Controller
{
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
        SetupSheet::create($request->all());
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
}
