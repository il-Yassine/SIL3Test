@extends('layouts.app')

@section('content')
<div class="content-wrapper">



<form class="m-5" action="{{ route('tasks.store')}}" method="POST">
  @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="{{ old('nom')}}" placeholder="Nom de la tache" name="nom" >
        </div>
        <div class="input-group mb-3">
           <textarea class="form-control" placeholder="Description" rows="6" name="desc" required>{{ old('desc')}}</textarea>
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" placeholder="Delai" name="delai"  value="{{ old('delai')}}" required>
        </div>
          <!-- /.col -->
          <div class="col-md-12 text-center">
            <button type="submit" style="text-align:center" class="btn btn-primary btn-block">Enregistrer</button>
          </div>

        </div>
      </form>






  </div>
 @endsection
