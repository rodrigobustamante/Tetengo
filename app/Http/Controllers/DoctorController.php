<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctor.index')->with(['doctors' => $doctors]);
    }

    public function create()
    {
        return view('doctor.create');
    }

    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->rut           = $request->rut;
        $doctor->name          = $request->name;
        $doctor->date_of_hire  = $request->date_of_hire;
        $doctor->speciality    = $request->speciality;
        $doctor->price         = $request->price;
        $doctor->save();

        return redirect()->route('doctors.index');
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);
     
        return view('doctor.show')->with(['doctor' => $doctor]);
    }

    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->route('doctors.index');
    }
}
