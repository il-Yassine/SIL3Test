@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des utilisateurs</h3> <a class="btn btn-primary" href="{{route('users.create')}}">Ajouter un utilisateur</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>Nom</th>
                    <th>email</th>
                    <th>Ajoutée le</th>
                    <th>date dajout</th>
                    <th>Option(s)
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $key=> $user)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->password}}</td>
                      <td>{{$user->created_at}}</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('users.edit',$user->id)}}" >
                          <i class="fas fa-edit"></i> Edit

                        </a><a href="{{ route('users.show',$user->id)}}" class="btn btn-primary">
                          <i class="fas fa-eye"></i> Voir

                        </a>
                        <a href="{{ route('users.destroy',$user->id)}}" class="btn btn-danger">
                        <i class="fas fa-delete"></i> Supprimer

                      </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
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
