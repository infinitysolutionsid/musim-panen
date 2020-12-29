@extends('dashboards')
@section('titledash','Home')
@section('activedashboard','active')
@section('contents')
<div class="container-fluid">
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    <strong>{{$ann->title}}:</strong><br>{!!strip_tags($ann->messages)!!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="stat-widget-two">
                        <div class="stat-content">
                            <div class="stat-text">Total Quotations </div>
                            <div class="stat-digit">{{$quotation}}</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="stat-widget-two">
                        <div class="stat-content">
                            <div class="stat-text">Total Catalog Item</div>
                            <div class="stat-digit">{{$catalog}}</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="stat-widget-two">
                        <div class="stat-content">
                            <div class="stat-text">Total Categories Item</div>
                            <div class="stat-digit">{{$kategori}}</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="stat-widget-two">
                        <div class="stat-content">
                            <div class="stat-text">Total Item Produk</div>
                            <div class="stat-digit">{{$item}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sales Overview</h4>
                        <div id="morris-bar-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="m-t-10">
                        <p>Customer Feedback</p>
                        <h5>385749</h5>
                    </div>
                    <div class="widget-card-circle pr m-t-20 m-b-20" id="info-circle-card">
                        <i class="ti-control-shuffle pa"></i>
                    </div>
                    <ul class="widget-line-list m-b-15">
                        <li class="border-right">92% <br><span class="color-success"><i class="ti-hand-point-up"></i>
                                Positive</span></li>
                        <li>8% <br><span class="color-danger"><i class="ti-hand-point-down"></i>Negative</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
