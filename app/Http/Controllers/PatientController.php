<?php

namespace App\Http\Controllers;

use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::latest()->get();

        return view('dashboard.pendaftaran.patient.index', compact('patients'));
    }
    public function indexManajer()
    {
        $patients = Patient::latest()->get();
        return view('dashboard.manajer.datapasien.index', compact('patients'));
    }
}
