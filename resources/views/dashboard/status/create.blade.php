@extends('layouts.app')

@section('content')
<div class="content-wrapper">

<form class="m-5" action="{{ route('statuses.store')}}" method="POST">
  @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="{{ old('nom')}}" placeholder="Nom" name="nom" >
        </div>
        <select class="form-control mb-3" name="couleur" required="">
          <option>Selectionnez une couleur</option>
          <option class="bg-primary" value="primary">primary</option>
          <option class="bg-info" value="info">info</option>
          <option class="bg-success" value="success">success</option>
          <option class="bg-warning" value="warning">warning</option>
          <option class="bg-secondary" value="secondary">secondary</option>
          <option class="bg-danger" value="danger">danger</option>
        </select>
          <!-- /.col -->
          <div class="col-md-12 text-center">
            <button type="submit" style="text-align:center" class="btn btn-primary btn-block">Enregistrer</button>
          </div>
				
        </div>
      </form>






  </div>
 @endsection