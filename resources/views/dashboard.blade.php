@include('layouts/sidemenu')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
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
                                                <ul class="timeline" id="timeline">
                                                    <li class="li complete">
                                                        <div class="timestamp">
                                                        <span class="author">Abhi Sharma</span>
                                                        <span class="date">11/15/2014<span>
                                                        </div>
                                                        <div class="status">
                                                        <h4> Shift Created </h4>
                                                        </div>
                                                    </li>
                                                    <li class="li complete">
                                                        <div class="timestamp">
                                                        <span class="author">PAM Admin</span>
                                                        <span class="date">11/15/2014<span>
                                                        </div>
                                                        <div class="status">
                                                        <h4> Email Sent </h4>
                                                        </div>
                                                    </li>
                                                    <li class="li complete">
                                                        <div class="timestamp">
                                                        <span class="author">Aaron Rodgers</span>
                                                        <span class="date">11/15/2014<span>
                                                        </div>
                                                        <div class="status">
                                                        <h4> SIC Approval </h4>
                                                        </div>
                                                    </li>
                                                    <li class="li">
                                                        <div class="timestamp">
                                                        <span class="author">PAM Admin</span>
                                                        <span class="date">TBD<span>
                                                        </div>
                                                        <div class="status">
                                                        <h4> Shift Completed </h4>
                                                        </div>
                                                    </li>
                                                </ul>  
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

<style>
.timeline {
    list-style-type: none;
    display: flex;
    align-items: center;
    justify-content: center;
}

.li {
    transition: all 200ms ease-in;
}

.timestamp {
    margin-bottom: 20px;
    padding: 0px 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-weight: 100;
}

.status {
    padding: 0px 40px;
    display: flex;
    justify-content: center;
    border-top: 2px solid #D6DCE0;
    position: relative;
    transition: all 200ms ease-in;
}
.status h4 {
    font-weight: 600;
}
.status:before {
    content: "";
    width: 25px;
    height: 25px;
    background-color: white;
    border-radius: 25px;
    border: 1px solid #ddd;
    position: absolute;
    top: -15px;
    left: 42%;
    transition: all 200ms ease-in;
}

.li.complete .status {
    border-top: 2px solid #66DC71;
}
.li.complete .status:before {
    background-color: #66DC71;
    border: none;
    transition: all 200ms ease-in;
}
    .li.complete .status h4 {
    color: #66DC71;
}

@media (min-device-width: 320px) and (max-device-width: 700px) {
    .timeline {
        list-style-type: none;
        display: block;
    }

    .li {
        transition: all 200ms ease-in;
        display: flex;
        width: inherit;
    }

    .timestamp {
        width: 100px;
    }

    .status:before {
        left: -8%;
        top: 30%;
        transition: all 200ms ease-in;
    }
}
</style>