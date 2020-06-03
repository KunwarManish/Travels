@extends('layouts.master')

@section('title' , 'User Profile | Travels')

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User Profile</h4>
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                        {{ session('status')}}
                  </div>
                @endif  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>USERTYPE</th>
                      <th>EDIT </th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                      @foreach ($users as $row)
                      <tr>
                        <td> {{$row->id}} </td>
                        <td> {{$row->name}} </td>
                        <td> {{$row->email}}</td>
                        <td> {{$row->usertype}}</td>
                        <td>
                            <a href=" {{ route ('admin.editUser', $row->id) }}" class="btn btn-sucess">EDIT</a>
                        </td>
                        <td>
                        <a href="{{ route ('admin.deleteUser', $row->id)}}" class="btn btn-danger">DELETE</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection


@section('scripts')

    <script>
          $(document).ready( function () {
              $('#datatable').DataTable();
          } );
    </script>

@endsection