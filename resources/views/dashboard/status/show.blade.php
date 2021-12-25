@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail des status</h3> <a class="btn btn-primary" href="{{route('statuses.edit',$status->id)}}">Modifier le status</a> 
                <form class="m-5" action="{{ route('statuses.destroy',$status->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Supprimer status</button>
                </form> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                id : {{ $status->id}}<br>
                nom : {{ $status->nom}}<br>
                couleur : <span class="bg-{{$status->couleur}}">{{ $status->couleur}}</span> <br>
                Creer le : {{ $status->created_at}}<br>
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