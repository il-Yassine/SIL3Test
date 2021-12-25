@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail des tâches</h3>
            <a class="btn btn-primary" href="{{route('tasks.edit',$task->id)}}">Modifier la tache</a>
            <form class="m-5" action="{{ route('tasks.destroy',$task->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer Tache</button>
            </form>
        </div><br>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    id : {{ $task->id}}<br>
                    nom : {{ $task->nom}}<br>
                    Description : {{ $task->description}}<br>
                    Delai : {{ $task->delai}}<br>
                    Creer le : {{ $task->created_at}}<br>
                    Par : {{ $task->user->name}}<br>
                </div>
                <div class="col-md-6">

                    @foreach ($task->statuses as $status )
                    {{  $status->nom }}
                     {{--  Le {{  $status->pivot->created_at }}  --}}
                     <br>

                    @endforeach
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>


</div>


@endsection
