@include('layouts/sidemenu')
<script src="https://raw.githubusercontent.com/nnnick/Chart.js/master/dist/Chart.bundle.js"></script> 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <br>
    <nav aria-label="breadcrumb" style="padding-left: 15px;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 dash-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/icons/dash-ic1.png" style="width: 75px;margin: auto;">  
                            </div>
                            <div class="col-lg-6" style="text-align: center;">
                                <h5 class="card-title">Applied Jobs</h5>
                                <p class="card-text" style="font-size: 30px;">10</p>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 dash-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/icons/dash-ic1.png" style="width: 75px;margin: auto;"> 
                            </div>
                            <div class="col-lg-6" style="text-align: center;">
                                <h5 class="card-title">Approved Jobs</h5>
                                <p class="card-text" style="font-size: 30px;">10</p>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 dash-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/icons/dash-ic1.png" style="width: 75px;margin: auto;"> 
                            </div>
                            <div class="col-lg-6" style="text-align: center;">
                                <h5 class="card-title">Similar Jobs</h5>
                                <p class="card-text" style="font-size: 30px;">10</p>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 dash-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/icons/dash-ic1.png" style="width: 75px;margin: auto;"> 
                            </div>
                            <div class="col-lg-6" style="text-align: center;">
                                <h5 class="card-title">Applied Jobs</h5>
                                <p class="card-text" style="font-size: 30px;">10</p>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            <div class="row">
                <div class="col-lg-8" style="padding-left: 25px;">
                    <div class="card">
                        <div class="card-body">
                            <div class="container">  
                                <div class="row">  
                                    <div class="col-md-10 col-md-offset-1">  
                                        <div class="panel panel-default">  
                                            <div class="panel-heading">Dashboard</div>  
                                            <div class="panel-body">  
                                                <canvas id="canvas" height="280" width="600"></canvas>  
                                            </div>  
                                        </div>  
                                    </div>  
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="padding-right: 25px;">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Top Recommended Jobs(from user main category)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</x-app-layout>

<script>  
    var year = ['2013','2014','2015', '2016'];  
    var data_click = '';  
    var data_viewer = '';  
  
    var barChartData = {  
        labels: year,  
        datasets: [{  
            label: 'Click',  
            backgroundColor: "rgba(220,220,220,0.5)",  
            data: data_click  
        }, {  
            label: 'View',  
            backgroundColor: "rgba(151,187,205,0.5)",  
            data: data_viewer  
        }]  
    };  
  
    window.onload = function() {  
        var ctx = document.getElementById("canvas").getContext("2d");  
        window.myBar = new Chart(ctx, {  
            type: 'bar',  
            data: barChartData,  
            options: {  
                elements: {  
                    rectangle: {  
                        borderWidth: 2,  
                        borderColor: 'rgb(0, 255, 0)',  
                        borderSkipped: 'bottom'  
                    }  
                },  
                responsive: true,  
                title: {  
                    display: true,  
                    text: 'Yearly Website Visitor'  
                }  
            }  
        });  
  
    };  
</script>  