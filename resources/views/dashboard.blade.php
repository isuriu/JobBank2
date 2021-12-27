@include('layouts/sidemenu')
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
