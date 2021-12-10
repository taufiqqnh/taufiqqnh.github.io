@extends('admin.layouts.template')

@section('content')

  <div class="container px-4 ">
    <div class="w-2/2 m-auto text-center ">
      <div class="py-15 border-b border-gray-200">
          <h1 class="text-5xl font-bold">
              DASHBOARD
          </h1>
      </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-md-4">
                <div class="icon-big text-center icon-warning">
                  <i class="nc-icon nc-globe text-warning"></i>
                </div>
              </div>
              <div class="col-7 col-md-8">
                <div class="numbers">
                  <p class="card-category">Capacity</p>
                  <p class="card-title">150GB</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <hr />
            <div class="stats">
              <i class="fa fa-refresh"></i>
              Update Now
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-md-4">
                <div class="icon-big text-center icon-warning">
                  <i class="nc-icon nc-money-coins text-success"></i>
                </div>
              </div>
              <div class="col-7 col-md-8">
                <div class="numbers">
                  <p class="card-category">Revenue</p>
                  <p class="card-title">$ 1,345</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <hr />
            <div class="stats">
              <i class="fa fa-calendar-o"></i>
              Last day
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-md-4">
                <div class="icon-big text-center icon-warning">
                  <i class="nc-icon nc-vector text-danger"></i>
                </div>
              </div>
              <div class="col-7 col-md-8">
                <div class="numbers">
                  <p class="card-category">Errors</p>
                  <p class="card-title">23</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <hr />
            <div class="stats">
              <i class="fa fa-clock-o"></i>
              In the last hour
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-md-4">
                <div class="icon-big text-center icon-warning">
                  <i class="nc-icon nc-favourite-28 text-primary"></i>
                </div>
              </div>
              <div class="col-7 col-md-8">
                <div class="numbers">
                  <p class="card-category">Followers</p>
                  <p class="card-title">+45K</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <hr />
            <div class="stats">
              <i class="fa fa-refresh"></i>
              Update now
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Users Behavior</h5>
            <p class="card-category">24 Hours performance</p>
          </div>
          <div class="card-body">
            <canvas id="chartHours" width="400" height="100"></canvas>
          </div>
          <div class="card-footer">
            <hr />
            <div class="stats"><i class="fa fa-history"></i> Updated 3 minutes ago</div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Email Statistics</h5>
            <p class="card-category">Last Campaign Performance</p>
          </div>
          <div class="card-body">
            <canvas id="chartEmail"></canvas>
          </div>
          <div class="card-footer">
            <div class="legend"><i class="fa fa-circle text-primary"></i> Opened <i class="fa fa-circle text-warning"></i> Read <i class="fa fa-circle text-danger"></i> Deleted <i class="fa fa-circle text-gray"></i> Unopened</div>
            <hr />
            <div class="stats"><i class="fa fa-calendar"></i> Number of emails sent</div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-title">NASDAQ: AAPL</h5>
            <p class="card-category">Line Chart with Points</p>
          </div>
          <div class="card-body">
            <canvas id="speedChart" width="400" height="100"></canvas>
          </div>
          <div class="card-footer">
            <div class="chart-legend"><i class="fa fa-circle text-info"></i> Tesla Model S <i class="fa fa-circle text-warning"></i> BMW 5 Series</div>
            <hr />
            <div class="card-stats"><i class="fa fa-check"></i> Data information certified</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Slider --}}
{{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('asset/computer1.jpg')}}" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('asset/computer2.jpg')}}" class="d-block w-100 " alt="...">
      </div>
    <div class="carousel-item">
      <img src="{{asset('asset/computer3.jpg')}}" class="d-block w-100 " alt="...">
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> --}}
  </div>
@endsection
@push("script")
<script>
      $('.dashboard').addClass("active");
</script>
@endpush