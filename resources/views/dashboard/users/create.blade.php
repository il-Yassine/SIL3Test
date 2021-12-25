@extends('layouts.app')

@section('content')
<div class="content-wrapper">


    <form class="m-5" action="{{ route('users.store')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom de l' utilisateur" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="input-group mb-3">
           <input  id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
            placeholder="email" rows="6" name="email" required='required'>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="mot de pase" name="password" required=" required" required autocomplete="new-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror

        </div>

        <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" placeholder="confirmer mot de passe" name="password_confirmation" required autocomplete="new-password">

         </div>
          <!-- /.col -->
                <!-- /.col -->
                <div class="col-md-12 text-center">
                  <button type="submit" style="text-align:center" class="btn btn-primary btn-block">Enregistrer</button>
                </div>

              </div>
            </form>

  </div>
 @endsection
