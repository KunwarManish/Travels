@extends('layouts.master')

@section('title' ,'Dashboard | Travels')
    
@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Dashboard</h4>
              </div>
              <div class="card-body">
                               
                <section class="pb-3">

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-4 mb-xl-0 mb-4">

    <!-- Card Primary -->
    <div class="card classic-admin-card primary-color">
      <div class="card-body">
        <div class="pull-right">
          <i class="now-ui-icons users_single-02"></i>
        </div>
        <p class="white-text">USERS</p>
        <h4>{{$totalUserCount}}</h4>
      </div>
    </div>
    <!-- Card Primary -->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-xl-4 col-md-4 mb-xl-0 mb-4">

    <!-- Card Yellow -->
    <div class="card classic-admin-card warning-color">
      <div class="card-body">
        <div class="pull-right">
          <i class="now-ui-icons travel_istanbul"></i>
        </div>
        <p>HOTELS</p>
        <h4>{{$totalhotelCount}}</h4>
      </div>
    </div>
    <!-- Card Yellow -->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-xl-4 col-md-4 mb-md-0 mb-4">

    <!-- Card Blue -->
    <div class="card classic-admin-card light-blue lighten-1">
      <div class="card-body">
        <div class="pull-right">
          <i class="now-ui-icons education_atom"></i>
        </div>
        <p>HOTELS REVIEWS</p>
        <h4>{{$totalhotelreviewCount}} </h4>
      </div>
    </div>
  </div>
</div>
<!-- Grid row -->

</section>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection


@section('scripts')


@endsection