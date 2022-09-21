@extends('layouts::layouts.master')

@section('title')
    {{ __('Dashboard') }}
@endsection

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4 text-dark">Dashboard</h1>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="clearfix">
                        <div class="float-left">
                            <div class="card-body"><h3 class="font-weight-medium text-left mb-0">Users</h3></div>
                        </div>
                        <div class="float-right">
                            <div class="card-body"><h3 class="font-weight-medium text-right mb-0"></h3></div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="">View Details</a>
                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="clearfix">
                        <div class="float-left">
                            <div class="card-body"><h3 class="font-weight-medium text-left mb-0">Posts</h3></div>
                        </div>
                        <div class="float-right">
                            <div class="card-body"><h3 class="font-weight-medium text-right mb-0">0</h3></div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="">View Details</a>
                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="clearfix">
                        <div class="float-left">
                            <div class="card-body"><h3 class="font-weight-medium text-left mb-0">Orders</h3></div>
                        </div>
                        <div class="float-right">
                            <div class="card-body"><h3 class="font-weight-medium text-right mb-0">0</h3></div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="clearfix">
                        <div class="float-left">
                            <div class="card-body"><h3 class="font-weight-medium text-left mb-0">Products</h3></div>
                        </div>
                        <div class="float-right">
                            <div class="card-body"><h3 class="font-weight-medium text-right mb-0">0</h3></div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand"><div class=""></div></div>
                        <div class="chartjs-size-monitor-shrink"><div class=""></div></div>
                    </div>
                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Chart order</div>
                    <canvas id="chartOrder" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand"><div class=""></div></div>
                        <div class="chartjs-size-monitor-shrink"><div class=""></div></div>
                    </div>
                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Chart product</div>
                    <canvas id="chartProduct"></canvas>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        // Chart 1

        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            ];
            const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: '#ff6666',
                borderColor: '#ff6666',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {}
        };

        const chartOrder = new Chart(
            document.getElementById('chartOrder'),
            config
        );

        const ChartProduct = new Chart(
            document.getElementById('chartProduct'),
            config
        );
    </script>
@endsection