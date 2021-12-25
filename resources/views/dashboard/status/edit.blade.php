@extends('layouts.app')

@section('content')
<div class="content-wrapper">



<form class="m-5" action="{{ route('statuses.update',$status->id)}}" method="POST">
  @method('PUT')
  @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="{{ $status->nom}}" placeholder="Nom" name="nom" >
        </div>

        <select class="form-control mb-3" name="couleur" required="">
          <option>Selectionnez une couleur</option>
          <option class="bg-primary" value="primary" {{$status->couleur == "primary" ? "selected" : ""}}>primary</option>
          <option class="bg-info" value="info" {{$status->couleur == "info" ? "selected" : ""}}>info</option>
          <option class="bg-success" value="success" {{$status->couleur == "success" ? "selected" : ""}}>success</option>
          <option class="bg-warning" value="warning" {{$status->couleur == "warning" ? "selected" : ""}}>warning</option>
          <option class="bg-secondary" value="secondary" {{$status->couleur == "secondary" ? "selected" : ""}}>secondary</option>
          <option class="bg-danger" value="danger" {{$status->couleur == "danger" ? "selected" : ""}}>danger</option>
        </select>

          <!-- /.col -->
          <div class="col-md-12 text-center">
            <button type="submit" style="text-align:center" class="btn btn-primary btn-block">Enregistrer</button>
          </div>
				
        </div>
      </form>






  </div>
 @endsection