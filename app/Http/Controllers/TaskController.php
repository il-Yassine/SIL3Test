<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Task ;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::all();
        return view('dashboard.tasks.index', compact('tasks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tasks.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required|string',
            'description'=>'nullable',
            'delai'=>'required|date'
        ]);
        $task= Task::create([
            'nom' =>$request->nom,
            'description'=>$request->desc,
            'delai'=>$request->delai,
            'user_id'=>auth()->user()->id

        ]);
        $status=Status::where('nom', 'actif')->get();
        $task->statuses()->attach($status);


        session()->flash('success','La tâches a été bien enregistrer ');
        return redirect()->route('tasks.show', $task->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task=Task::findOrFail($id);
        return view('dashboard\tasks\show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task=Task::findOrfail($id);
        return view('dashboard\tasks\edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nom'=> 'required|string',
            'description'=>'nullable',
            'delai'=>'required|string',
        ]);
        $task=Task::findOrfail($id);
        $task->nom=$request->nom;
        $task->description=$request->desc;
        $task->delai=$request->delai;
        $task->save();

        $status=Status::findOrfail($request->status_id);
        $task->statuses()->attach($status);


        session()->flash('success','La tâche a été modifier avec succès');
        return redirect()->route('tasks.show',$task->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $task=Task::findOrfail($id);
    $task->delete();
    session()->flash('success','La tâche a été supprimer avec succès');
    return redirect()->route('tasks.index');
    }
}
