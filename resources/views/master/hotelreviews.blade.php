@extends('layouts.master')

@section('title' , 'Hotel Reviews | Travels')

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Hotel Reviews</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Hotel ID</th>
                      <th>Name</th>
                      <th>Rating</th>
                      <th>Reviews </th>
                    </thead>
                    <tbody>
                      @foreach ($hotelreviews as $row)
                      <tr>
                        <td> {{$row->id}} </td>
                        <td> {{$row->hotelid}} </td>
                        <td> {{$row->name}}</td>
                        <td> {{$row->rating}}</td>
                        <td> {{$row->reviews}}</td>
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