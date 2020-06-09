@extends('layouts.master')

@section('title' , 'Hotel Profile')

@section('content')

<div class="row">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Hotel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="{{route('admin.save-hotel')}}" enctype="multipart/form-data" method="POST" >
        {{ csrf_field() }}
             <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label>Price</label> $
                    <input type="text" class="form-control" name="price" placeholder="Enter Price" required>
                </div>
                
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter Description" required>
                </div>

                <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Enter Location" required>
                </div>
                <div class="form-">
                    <label>Upload Image</label>
                    <input type="file" class="form-" id="img" name="img">
                </div>
                
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            
        </form>
    </div>
  </div>
</div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Hotel Profile
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    ADD
                </button>
                </h4>
        @if (session('status'))
            <div class="alert alert-sucess" role="alert">
                {{ session('status') }}
            </div>
        @endif
              </div>
              <style>
                    .w-10p{
                        width: 10% !important;
                    }
              </style>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th class="">ID</th>
                      <th class="w-10p">Name</th>
                      <th class="w-10p">Price </th>
                      <th class="w-10p">Description</th>
                      <th class="w-10p">Location</th>
                      <th class="w-10p">Image</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                      @foreach ($hotel as $data)
                      <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td>
                            <div style="height:80px; overflow:hidden;">
                             {{ $data->location }}
                            </div>
                        </td>
                        <td><img src="/storage/{{$data->img}} " class="w-100" alt=""></td>
                        <td>
                            <a href="{{ url('/admin/hotel/' .$data->id) }}" class="btn btn-sucess">EDIT</a>
                        </td>
                        <td>
                            <form action="{{ url('/admin/hotel-delete/' .$data->id) }}" method="POST">
                                 {{csrf_field()}}
                                 {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
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