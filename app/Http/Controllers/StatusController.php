<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuses=Status::all();
        return view('dashboard.status.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses=Status::all();
        return view('dashboard.status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusRequest $request)
    {
        $this->validate($request,[
            'nom' =>'required|string',
            'couleur' =>'required|string',
        ]);
        $status=Status::create([
            'nom' => $request->nom,
            'couleur' => $request->couleur,
    ]);
    session()->flash('success','Le status a été bien enregistrer');
    return redirect()->route('statuses.show',$status->id );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        return view ('dashboard.status.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('dashboard.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusRequest  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusRequest $request, Status $status)
    {
        $this->validate($request,[
            'nom'=>'required|string',
            'couleur'=>'required|string'
        ]);

        $status->nom=$request->nom;
        $status->couleur=$request->couleur;
        $status->save();
        session()->flash('success','Le status a été modifier avec succès');
        return redirect()->route('status.show',$status->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status->delete();
        session()-> flash('success',' Le status a été supprimer avec succès');
        return redirect()->route('statuses.index');
    }
}
