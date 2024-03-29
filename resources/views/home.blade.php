@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')


    <!-- WEBSITE ANALYTICS -->
    <div class="dashboard-section">
        <div class="section-heading clearfix">
            <h2 class="section-title"><i class="fa fa-pie-chart"></i> Website Analytics</h2>
            <a href="#" class="right">View Full Analytics Reports</a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!-- TRAFFIC SOURCES -->
                <div class="panel-content">
                    <h2 class="heading"><i class="fa fa-square"></i> Traffic Sources</h2>
                    <div id="demo-pie-chart" class="ct-chart"></div>
                </div>
                <!-- END TRAFFIC SOURCES -->
            </div>
            <div class="col-md-4">
                <!-- REFERRALS -->
                <div class="panel-content">
                    <h2 class="heading"><i class="fa fa-square"></i> Referrals</h2>
                    <ul class="list-unstyled list-referrals">
                        <li>
                            <p><span class="value">3,454</span><span class="text-muted">visits from Facebook</span></p>
                            <div class="progress progress-xs progress-transparent custom-color-blue">
                                <div class="progress-bar" data-transitiongoal="87"></div>
                            </div>
                        </li>
                        <li>
                            <p><span class="value">2,102</span><span class="text-muted">visits from Twitter</span></p>
                            <div class="progress progress-xs progress-transparent custom-color-purple">
                                <div class="progress-bar" data-transitiongoal="34"></div>
                            </div>
                        </li>
                        <li>
                            <p><span class="value">2,874</span><span class="text-muted">visits from Affiliates</span></p>
                            <div class="progress progress-xs progress-transparent custom-color-green">
                                <div class="progress-bar" data-transitiongoal="67"></div>
                            </div>
                        </li>
                        <li>
                            <p><span class="value">2,623</span><span class="text-muted">visits from Search</span></p>
                            <div class="progress progress-xs progress-transparent custom-color-yellow">
                                <div class="progress-bar" data-transitiongoal="54"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- END REFERRALS -->
            </div>
            <div class="col-md-4">
                <div class="panel-content">
                    <!-- BROWSERS -->
                    <h2 class="heading"><i class="fa fa-square"></i> Browsers</h2>
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>Browsers</th>
                                <th>Sessions</th>
                                <th>% Sessions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Chrome</td>
                                <td>1,756</td>
                                <td>23%</td>
                            </tr>
                            <tr>
                                <td>Firefox</td>
                                <td>1,379</td>
                                <td>14%</td>
                            </tr>
                            <tr>
                                <td>Safari</td>
                                <td>1,100</td>
                                <td>17%</td>
                            </tr>
                            <tr>
                                <td>Edge</td>
                                <td>982</td>
                                <td>25%</td>
                            </tr>
                            <tr>
                                <td>Opera</td>
                                <td>967</td>
                                <td>19%</td>
                            </tr>
                            <tr>
                                <td>IE</td>
                                <td>896</td>
                                <td>12%</td>
                            </tr>
                            <tr>
                                <td>Android Browser</td>
                                <td>752</td>
                                <td>27%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END BROWSERS -->
                </div>
            </div>
        </div>
    </div>
    <!-- END WEBSITE ANALYTICS -->

    <!-- SALES SUMMARY -->
    <div class="dashboard-section">
        <div class="section-heading clearfix">
            <h2 class="section-title"><i class="fa fa-shopping-basket"></i> Sales Summary</h2>
            <a href="#" class="right">View Sales Reports</a>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="panel-content">
                    <h3 class="heading"><i class="fa fa-square"></i> Today</h3>
                    <ul class="list-unstyled list-justify large-number">
                        <li class="clearfix">Earnings <span>$215</span></li>
                        <li class="clearfix">Sales <span>47</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel-content">
                    <h3 class="heading"><i class="fa fa-square"></i> Sales Performance</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Last Week</th>
                                    <th>This Week</th>
                                    <th>Change</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Earnings</th>
                                    <td>$2752</td>
                                    <td><span class="text-info">$3854</span></td>
                                    <td><span class="text-success">40.04%</span></td>
                                </tr>
                                <tr>
                                    <th>Sales</th>
                                    <td>243</td>
                                    <td>
                                        <div class="text-info">322</div>
                                    </td>
                                    <td><span class="text-success">32.51%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div id="chart-sales-performance">Loading ...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="panel-content">
                    <h3 class="heading"><i class="fa fa-square"></i> Upcoming Months Installment Payments</h3>
                    <div class="table-responsive">
                        <table class="table table-striped no-margin">
                            <thead>
                            <tr>
                                <th>Due Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($monthlyInstallments as $detail)
                                <tr>
                                    <td>{{$detail->due_date}}</td>
                                    <td>{{$detail->amount}}</td>
                                    @if($detail->status)
                                        <td><span class="label label-danger">Late</span></td>
                                    @else
                                        <td><span class="label label-warning">Up-Coming</span></td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-content">
                    <h3 class="heading"><i class="fa fa-square"></i> Top Products</h3>
                    <div id="chart-top-products" class="chartist"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SALES SUMMARY -->

@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js') }}"></script>
    <script>
        $(function() {

            // sparkline charts
            var sparklineNumberChart = function() {

                var params = {
                    width: '140px',
                    height: '30px',
                    lineWidth: '2',
                    lineColor: '#20B2AA',
                    fillColor: false,
                    spotRadius: '2',
                    spotColor: false,
                    minSpotColor: false,
                    maxSpotColor: false,
                    disableInteraction: false
                };

                $('#number-chart1').sparkline('html', params);
                $('#number-chart2').sparkline('html', params);
                $('#number-chart3').sparkline('html', params);
                $('#number-chart4').sparkline('html', params);
            };

            sparklineNumberChart();


            // Traffic sources
            var dataPie = {
                series: [60, 40]
            };

            var labels = ['Cash', 'Installment'];
            var sum = function(a, b) {
                return a + b;
            };

            new Chartist.Pie('#demo-pie-chart', dataPie, {
                height: "270px",
                labelInterpolationFnc: function(value, idx) {
                    var percentage = Math.round(value / dataPie.series.reduce(sum) * 100) + '%';
                    return labels[idx] + ' (' + percentage + ')';
                }
            });


            // line chart
            var data = {
                labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                series: [
                    [200, 380, 350, 480, 410, 450, 550],
                ]
            };

            var options = {
                height: "200px",
                showPoint: true,
                showArea: true,
                axisX: {
                    showGrid: false
                },
                lineSmooth: false,
                chartPadding: {
                    top: 0,
                    right: 0,
                    bottom: 30,
                    left: 30
                },
                plugins: [
                    Chartist.plugins.tooltip({
                        appendToBody: true
                    }),
                    Chartist.plugins.ctAxisTitle({
                        axisX: {
                            axisTitle: 'Day',
                            axisClass: 'ct-axis-title',
                            offset: {
                                x: 0,
                                y: 50
                            },
                            textAnchor: 'middle'
                        },
                        axisY: {
                            axisTitle: 'Reach',
                            axisClass: 'ct-axis-title',
                            offset: {
                                x: 0,
                                y: -10
                            },
                        }
                    })
                ]
            };

            new Chartist.Line('#demo-line-chart', data, options);


            // sales performance chart
            var sparklineSalesPerformance = function() {

                var lastWeekData = [142, 164, 298, 384, 232, 269, 211];
                var currentWeekData = [352, 267, 373, 222, 533, 111, 60];

                $('#chart-sales-performance').sparkline(lastWeekData, {
                    fillColor: 'rgba(90, 90, 90, 0.1)',
                    lineColor: '#5A5A5A',
                    width: '' + $('#chart-sales-performance').innerWidth() + '',
                    height: '100px',
                    lineWidth: '2',
                    spotColor: false,
                    minSpotColor: false,
                    maxSpotColor: false,
                    chartRangeMin: 0,
                    chartRangeMax: 1000
                });

                $('#chart-sales-performance').sparkline(currentWeekData, {
                    composite: true,
                    fillColor: 'rgba(60, 137, 218, 0.1)',
                    lineColor: '#3C89DA',
                    lineWidth: '2',
                    spotColor: false,
                    minSpotColor: false,
                    maxSpotColor: false,
                    chartRangeMin: 0,
                    chartRangeMax: 1000
                });
            }

            sparklineSalesPerformance();

            var sparkResize;
            $(window).on('resize', function() {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineSalesPerformance, 200);
            });


            // top products
            var dataStackedBar = {
                labels: ['Q1', 'Q2', 'Q3'],
                series: [
                    [800000, 1200000, 1400000],
                    [200000, 400000, 500000],
                    [100000, 200000, 400000]
                ]
            };

            new Chartist.Bar('#chart-top-products', dataStackedBar, {
                height: "250px",
                stackBars: true,
                axisX: {
                    showGrid: false
                },
                axisY: {
                    labelInterpolationFnc: function(value) {
                        return (value / 1000) + 'k';
                    }
                },
                plugins: [
                    Chartist.plugins.tooltip({
                        appendToBody: true
                    }),
                    Chartist.plugins.legend({
                        legendNames: ['Phone', 'Laptop', 'PC']
                    })
                ]
            }).on('draw', function(data) {
                if (data.type === 'bar') {
                    data.element.attr({
                        style: 'stroke-width: 30px'
                    });
                }
            });


            // notification popup
            toastr.options.closeButton = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.options.showDuration = 1000;
            toastr['info']('Hello, welcome to IMS.');

        });
    </script>
@endsection

