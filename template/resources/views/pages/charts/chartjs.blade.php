@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="p-4 border-bottom bg-light">
        <h4 class="card-title mb-0">Mixed Chart</h4>
      </div>
      <div class="card-body">
        <canvas id="mixed-chart" height="100"></canvas>
        <div class="mr-5" id="mixed-chart-legend"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="p-4 border-bottom bg-light">
        <h4 class="card-title mb-0">Line Chart</h4>
      </div>
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center pb-4">
          <h4 class="card-title mb-0">Sales Performance</h4>
          <div id="line-traffic-legend"></div>
        </div>
        <div class="row"> 
          <div class="col-md-4">
            <h2 class="mb-0 font-weight-medium">$5,341</h2>
            <p class="mb-5 text-muted">Sales</p>
          </div>
          <div class="col-md-3">
            <h2 class="mb-0 font-weight-medium">$1,334</h2>
            <p class="mb-5 text-muted">Profits</p>
          </div>
        </div>
        <canvas id="lineChart" style="height:250px"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="p-4 border-bottom bg-light">
        <h4 class="card-title mb-0">Area Chart</h4>
      </div>
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center pb-4">
          <h4 class="card-title mb-0">Site Traffic</h4>
          <div id="area-traffic-legend"></div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h2 class="mb-0 font-weight-medium">3,245</h2>
            <p class="mb-5 text-muted">Users</p>
          </div>
          <div class="col-md-4">
            <h2 class="mb-0 font-weight-medium">12.54%</h2>
            <p class="mb-5 text-muted">Bounce Rate</p>
          </div>
        </div>
        <canvas id="areaChart" style="height:250px"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="p-4 border-bottom bg-light">
        <h4 class="card-title mb-0">Bar Chart</h4>
      </div>
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center pb-4">
          <h4 class="card-title mb-0">Sales Revenue</h4>
          <div id="bar-traffic-legend"></div>
        </div>
        <p class="mb-4">17% increase in sales than last week</p>
        <canvas id="barChart" style="height:250px"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="p-4 border-bottom bg-light">
        <h4 class="card-title mb-0">Stacked Bar chart</h4>
      </div>
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center pb-4">
          <h4 class="card-title mb-0">Users by Device</h4>
          <div id="stacked-bar-traffic-legend"></div>
        </div>
        <p class="mb-4">25% more traffic than previous week</p>
        <canvas id="stackedbarChart" style="height:250px"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="p-4 pr-5 border-bottom bg-light d-sm-flex justify-content-between">
        <h4 class="card-title mb-0">Radar chart</h4>
        <div id="radar-chart-legend"></div>
      </div>
      <div class="card-body">
        <canvas class="mt-4" id="radarChart" style="height:250px"></canvas>
        <div class="d-flex mt-5 py-3 border-top">
          <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span> Student A </p>
          <p class="mb-0 ml-auto text-primary">56%</p>
        </div>
        <div class="d-flex pt-3 border-top">
          <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span> Student B</p>
          <p class="mb-0 ml-auto text-primary">34%</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="p-4 pr-5 border-bottom bg-light d-sm-flex justify-content-between">
        <h4 class="card-title mb-0">Doughnut chart</h4>
        <div id="doughnut-chart-legend" class="mr-4"></div>
      </div>
      <div class="card-body d-flex flex-column">
        <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
        <div class="d-flex mt-5 py-3 border-top">
          <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span> Product Sales </p>
          <p class="mb-0 ml-auto text-primary">$2,464</p>
        </div>
        <div class="d-flex pt-3 border-top">
          <p class="mb-0 font-weight-semibold"><span class="dot-indicator bg-success"></span>Profit Attained </p>
          <p class="mb-0 ml-auto text-primary">$1,325</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="p-4 pr-5 border-bottom bg-light d-sm-flex justify-content-between">
        <h4 class="card-title mb-0">Pie chart</h4>
        <div id="pie-chart-legend" class="mr-4"></div>
      </div>
      <div class="card-body d-flex">
        <canvas class="my-auto" id="pieChart" height="130"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="p-4 pr-5 border-bottom bg-light d-sm-flex justify-content-between">
        <h4 class="card-title mb-0">Scatter chart</h4>
        <div id="scatter-chart-legend"></div>
      </div>
      <div class="card-body">
        <canvas id="scatterChart" style="height:250px"></canvas>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/chart.js') !!}
@endpush