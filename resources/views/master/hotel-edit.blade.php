@extends('layouts.master')

@section('title' , 'Hotel Profile Edit')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Hotel Profile - Edit Data</h4>
                        <form action="{{ url('/admin/hotel-update/'.$hotel->id) }}" enctype="multipart/form-data" method="POST" >
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $hotel->name}}">
                        </div>
                        <div class="form-group">
                            <label>Price</label> $
                            <input type="text" class="form-control" name="price" value="{{ $hotel->price}}">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" value="{{ $hotel->description}}">
                        </div>

                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" name="location" value="{{ $hotel->location}}">
                        </div>

                        <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" class="form-control" id="img" name="img" value="{{ $hotel->img}}">
                            <img src="/storage/{{$hotel->img}} " height = "60" weight = "60">
                        </div>
                        
                    </div>
                        <div class="modal-footer">
                            <a href="/admin/hotel" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>






@endsection


@section('scripts')


@endsection