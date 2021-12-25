@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Détail de l'utilisateur</h3> <a class="btn btn-primary" href="{{route('users.edit',$user->id)}}">Modifier l' utilisateur</a>
<!--                 <form class="m-5" action="{{ route('users.destroy',$user->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Supprimer l' utilisateur</button>
                </form>  -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                id : {{ $user->id}}<br>
                nom : {{ $user->name}}<br>
                email : {{ $user->email}}<br>
                Creer le : {{ $user->created_at}}<br>
                Liste des taches : <br>
                {{--  @foreach($user->tasks as $task)
                  <a href="{{route('tasks.show', $task->id)}}"> {{ $task->nom}}</a> <br>

                @endforeach  --}}
                 <br>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
