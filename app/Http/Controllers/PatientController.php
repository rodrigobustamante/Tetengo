<?php

namespace App\Http\Controllers;

use App\Patient;
use App\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        
        return view('patient.index')->with(['patients' => $patients]);
    }

    public function create()
    {
        $users = User::pluck('email', 'id');

        return view('patient.create')->with(['users' => $users]);
    }

    public function store(Request $request)
    {
        $patient = new Patient();

        $patient->rut       = $request->rut;
        $patient->name      = $request->name;
        $patient->birthdate = $request->birthdate;
        $patient->gender    = $request->gender;
        $patient->address   = $request->address;
        $patient->phone     = $request->phone;
        $patient->user_id   = $request->user_id;

        $patient->save();

        return redirect()->route('patients.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Patient $patient)
    {
        //
    }

    public function update(Request $request, Patient $patient)
    {
        //
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        return redirect()->route('patients.index');
    }
}
