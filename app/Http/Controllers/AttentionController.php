<?php

namespace App\Http\Controllers;

use App\Attention;
use App\Doctor;
use App\Patient;
use App\State;
use Illuminate\Http\Request;

class AttentionController extends Controller
{
    public function index()
    {
        $attentions = Attention::all();
        
        return view('attention.index')->with(['attentions' => $attentions]);
    }

    public function create()
    {
        $doctors  = Doctor::pluck('name', 'id');
        $patients = Patient::pluck('name', 'id');
        $states   = State::pluck('state', 'id');

        return view('attention.create')->with(compact('doctors', 'patients', 'states'));
    }

    public function store(Request $request)
    {
        $attention = new Attention();

        $attention->date_of_care = $request->date. ' ' . $request->hour . ':' . $request->minute . ':00';
        $attention->doctor_id    = $request->doctor_id;
        $attention->patient_id   = $request->patient_id;
        $attention->state_id     = 1;
        $attention->save();

        return redirect()->route('attentions.index');

    }

    public function show(Attention $attention)
    {
        //
    }

    public function edit(Attention $attention)
    {
        //
    }

    public function update(Request $request, Attention $attention)
    {
        //
    }

    public function destroy(Attention $attention)
    {
        //
    }
}
