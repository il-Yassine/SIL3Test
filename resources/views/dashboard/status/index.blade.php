@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des status</h3> <a class="btn btn-primary" href="{{route('statuses.create')}}">Ajouter un status</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Couleur</th>
                    <th>Option(s)
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($statuses as $key=> $status)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$status->id}}</td>
                      <td>{{$status->nom}}</td>
                      <td>{{$status->couleur}}</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('statuses.edit',$status->id)}}">
                          <i class="fas fa-edit"></i> Edit

                        </a><a href="{{ route('statuses.show',$status->id)}}" class="btn btn-primary">
                          <i class="fas fa-eye"></i> Voir

                        </a>

                    <a href="{{ route('statuses.destroy',$status->id)}}" class="btn btn-danger">
                        <i class="fas fa-destroy"></i> Supprimer

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
