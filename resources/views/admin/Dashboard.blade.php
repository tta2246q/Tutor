@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10 p-3">
        <h2>Dashboard</h2>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="card-title">Yêu Cầu Giải Quyết</h5>
                    <p class="card-text">99,999</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="card-title">Khách Hàng Mới</h5>
                    <p class="card-text">10,520</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="card-title">Doanh Thu</h5>
                    <p class="card-text">$12,345</p>
                </div>
            </div>
        </div>

        <div class="chart-card mb-4">
            <h5>Doanh Thu</h5>
            <canvas id="lineChart1"></canvas>
        </div>

        <div class="chart-card mb-4">
            <h5>Doanh Thu</h5>
            <canvas id="lineChart2"></canvas>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="chart-card">
                    <h5 class="mb-5">Lợi Nhuận 1</h5>
                    <canvas id="pieChart1"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="chart-card">
                    <h5 class="mb-5">Lợi Nhuận 2</h5>
                    <canvas id="pieChart2"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="chart-card">
                    <h5 class="mb-5">Lợi Nhuận 3</h5>
                    <canvas id="pieChart3"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection