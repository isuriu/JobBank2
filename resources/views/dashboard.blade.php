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
                                <p class="card-text" style="font-size: 30px;">{{$applied_count}}</p>
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
                                <p class="card-text" style="font-size: 30px;">0</p>
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
                                <p class="card-text" style="font-size: 30px;">0</p>
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
                                <p class="card-text" style="font-size: 30px;">0</p>
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
                                    <div class="col-md-12">  
                                        <div class="panel panel-default">  
                                            <div class="panel-heading"></div>  
                                            <div class="panel-body">  
                                                <ul class="timeline" id="timeline">
                                                @if (count($applied_data) > 0)
                                                    @foreach($applied_data as $cat)
                                                        <li class="li complete">
                                                            <div class="timestamp">
                                                            <span class="author">{{$cat->job_title}}</span>
                                                            <span class="date">{{$cat->closing_date}}<span>
                                                            </div>
                                                            <div class="status">
                                                            <h4>  </h4>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <span>No Jobs Applied Yet</span>
                                                @endif
                                                    
                                                    
                                                    <!--<li class="li complete">
                                                        <div class="timestamp">
                                                        <span class="author">PAM Admin</span>
                                                        <span class="date">11/15/2014<span>
                                                        </div>
                                                        <div class="status">
                                                        <h4> Email Sent </h4>
                                                        </div>
                                                    </li>-->
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
                            @if (count($category_jobs) > 0)
                                @foreach($category_jobs as $cat)
                                    <li class="li complete">
                                        <div class="timestamp">
                                        <span class="author">{{$cat->job_title}}</span>
                                        <span class="date"><span>
                                        </div>
                                        <div class="status">
                                        <h4>  </h4>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <span>No Recommended Jobs Yet</span>
                            @endif
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
    height: 350px;
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
    padding-top: 20px;
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
    border-top: 2px solid #ee7928;
}
.li.complete .status:before {
    background-color: #ee7928;
    border: none;
    transition: all 200ms ease-in;
}
    .li.complete .status h4 {
    color: #ee7928;
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

.timeline li:hover{
    transform: scale(1.5);
    position: relative;
    top: -7.5px;
}
</style>