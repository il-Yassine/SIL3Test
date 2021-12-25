@extends('layouts.app')

@section('content')
<div class="content-wrapper">



<form class="m-5" action="{{ route('users.update',$user->id)}}" method="POST">
  @method('PUT')
  @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nom de l'utilisateur" name="name"  value="{{ $user->name}}" >
        </div>
        <div class="input-group mb-3">
           <input type="email" class="form-control" placeholder="email" rows="6" name="email" required='required' value="{{ $user->email}}">
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="mot de pase" name="password" required=" required">
        </div>
          <!-- /.col -->
          <div class="col-md-12 text-center">
            <button type="submit" style="text-align:center" class="btn btn-primary btn-block">Enregistrer</button>
          </div>

        </div>
      </form>






  </div>
 @endsection
