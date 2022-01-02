<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @include('layouts/links')

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <!--@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif-->


            <section class="header">
            <span class="parallax-h1">Looking For a <span class="theme-color">Job?</span></span>
            <span class="parallax-h2"><span class="theme-color">Join us</span> & Build Your Career Path Today</span>

                @include('layouts/navigation_home')

                <div class="home-form-position">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-registration-form">
                            <form class="registration-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4" style="padding: 5px;">
                                                <div class="registration-form-box input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                    </div>
                                                    <input type="text" id="" class="form-control span1" placeholder="Job keybords..." style="border-left: none;">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4" style="padding: 5px;">
                                                <div class="registration-form-box">
                                                    <select id="select-category" class="span1" style="width: 100%;">
                                                        <option></option>
                                                        <option value="1">Developing</option>
                                                        <option value="2">Designing</option>
                                                        <option value="3">Engineering</option>
                                                        <option value="4">Doctor</option>
                                                        <option value="5">Business Management</option>
                                                        <option value="6">Artist</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4" style="padding: 5px;">
                                                <div class="registration-form-box">
                                                    <input type="submit" id="submit" name="send" class="btn btn-primary span1" value="Submit" style="width: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <br>
        <div class="container">
            <!-- Tab links -->
            <div class="tab" style="text-align: center;">
                <button class="tablinks active" onclick="openJobsTab(event, 'recent_jobs')">Recent Jobs</button>
                <button class="tablinks" onclick="openJobsTab(event, 'featured_jobs')">Featured Jobs</button>
                <button class="tablinks" onclick="openJobsTab(event, 'parttime_jobs')">Part Time</button>
                <button class="tablinks" onclick="openJobsTab(event, 'fulltime_jobs')">Full TIme</button>
            </div>

            <!-- Tab content -->
            <div id="recent_jobs" class="tabcontent" style="display:block;">
                <div class="job-box bg-white mt-4">
                    <div class="p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <div class="mo-mb-2">
                                    <img src="img/job-icon.png" alt="" class="img-fluid mx-auto d-block" style="width:70%">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <h5 class="f-18"><a href="#" class="text-dark">Php Developer</a></h5>
                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt text-custom"></i>Berkshire Circle Knoxville</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-custom">$</span>900-1100/m</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0">Full Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-light-jobcont">
                        <div class="row">
                            <div class="col-md-10">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 2 - 3 years</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <a href="#" class="text-custom">Apply Now &nbsp;<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="job-box bg-white mt-4">
                    <div class="p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <div class="mo-mb-2">
                                    <img src="img/job-icon.png" alt="" class="img-fluid mx-auto d-block" style="width:70%">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <h5 class="f-18"><a href="#" class="text-dark">Web Developer</a></h5>
                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt text-custom"></i>Berkshire Circle Knoxville</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-custom">$</span>900-1100/m</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0">Full Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-light-jobcont">
                        <div class="row">
                            <div class="col-md-10">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 2 - 3 years</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <a href="#" class="text-custom">Apply Now &nbsp;<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="featured_jobs" class="tabcontent">
                <div class="job-box bg-white mt-4">
                    <div class="p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <div class="mo-mb-2">
                                    <img src="img/job-icon.png" alt="" class="img-fluid mx-auto d-block" style="width:70%">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <h5 class="f-18"><a href="#" class="text-dark">Web Developer</a></h5>
                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt text-custom"></i>Berkshire Circle Knoxville</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-custom">$</span>900-1100/m</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0">Full Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-light-jobcont">
                        <div class="row">
                            <div class="col-md-10">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 2 - 3 years</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <a href="#" class="text-custom">Apply Now &nbsp;<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="parttime_jobs" class="tabcontent">
                <div class="job-box bg-white mt-4">
                    <div class="p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <div class="mo-mb-2">
                                    <img src="img/job-icon.png" alt="" class="img-fluid mx-auto d-block" style="width:70%">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <h5 class="f-18"><a href="#" class="text-dark">Php Developer</a></h5>
                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt text-custom"></i>Berkshire Circle Knoxville</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-custom">$</span>900-1100/m</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0">Full Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-light-jobcont">
                        <div class="row">
                            <div class="col-md-10">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 2 - 3 years</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <a href="#" class="text-custom">Apply Now &nbsp;<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fulltime_jobs" class="tabcontent">
                <div class="job-box bg-white mt-4">
                    <div class="p-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <div class="mo-mb-2">
                                    <img src="img/job-icon.png" alt="" class="img-fluid mx-auto d-block" style="width:70%">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <h5 class="f-18"><a href="#" class="text-dark">Web Developer</a></h5>
                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt text-custom"></i>Berkshire Circle Knoxville</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-custom">$</span>900-1100/m</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <p class="text-muted mb-0">Full Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-light-jobcont">
                        <div class="row">
                            <div class="col-md-10">
                                <div>
                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 2 - 3 years</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div>
                                    <a href="#" class="text-custom">Apply Now &nbsp;<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container-fluid bluesection" style="padding-left: 0px;">
        	<div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 blue-halef">

                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12" style="background-color: #ff8e3e;color:#fff;padding-right: 0px !important;">
                    <div style="padding: 60px 120px 5px;">
                        <h3>Job Bank Stats</h3>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                    <div style="padding: 0 85px 100px 80px;">
                        <ul id="counter">
                                <li><div class="counter-value" data-count="15" style="display: inline-block;">0</div><div style="display: inline-block;">K</div><span style="display: block;">Job Offers</span></li>
                                <li><div class="counter-value" data-count="4982">3000</div><span style="display: block;">Members</span></li>
                                <li><div class="counter-value" data-count="768">600</div><span style="display: block;">Resume Posted</span></li>
                                <li><div class="counter-value" data-count="90" style="display: inline-block;">0</div><div style="display: inline-block;">%</div><span style="display: block;">Client who Rehier</span></li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
        <br>
        <div class="step-to">
			<div class="container">
				<h1>Easiest Way To Use</h1>
				<p>
					At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas mo
				</p>
	
				<div class="step-spacer"></div>
				<div id="step-image">
					<div class="row">
						<div class="col-md-4">
							First Step
							<div class="step-by-inner">
								<div class="step-by-inner-img">
									<img src="img/Main/mbg4.jpg" alt="step" style="height :60px;">
								</div>
							</div>
							<h5>Register with us</h5>
						</div>
								
						<div class="col-md-4">
							Second Step
							<div class="step-by-inner">
								<div class="step-by-inner-img">
									<img src="images/step-icon-2.png" alt="step">
								</div>
							</div>
							<h5>Create your profile</h5>
						</div>
								
						<div class="col-md-4">
							Third Step
							<div class="step-by-inner">
								<div class="step-by-inner-img">
									<img src="images/step-icon-3.png" alt="step">
								</div>
							</div>
							<h5>Upload your resume</h5>
						</div>
								
					</div>
				</div>
				<div class="step-spacer"></div>
			</div>
		</div>

        
        @include('layouts/scripts')
        </div>
    </body>
</html>
