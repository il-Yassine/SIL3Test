@extends('layouts.app')

@section('content')
<div class="content-wrapper">



<form class="m-5" action="{{ route('tasks.update',$task->id)}}" method="POST">
  @method('PUT')
  @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="{{ $task->nom}}" placeholder="Nom de la tache" name="nom" >
        </div>
        <div class="input-group mb-3">
           <textarea class="form-control" placeholder="Description" rows="6" name="desc" required>{{ $task->description}}</textarea>
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" placeholder="Delai" name="delai"  value="{{ $task->delai}}" required>
        </div>

        <select class="form-control mb-3" name="status_id" value='id' required="">
            <option>Selectionnez une couleur</option>

            {{--  @foreach($statuses as $key=> $status)


            <option class="bg-primary" value="primary" {{$status->nom}} ></option>



            @endforeach  --}}

          </select>
          <!-- /.col -->
          <div class="col-md-12 text-center">
            <button type="submit" style="text-align:center" class="btn btn-primary btn-block">Enregistrer</button>
          </div>

        </div>
      </form
>






  </div>
 @endsection
