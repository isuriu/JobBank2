<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @include('layouts/links')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />    

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
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
                                                    <input type="text" id="search_keyword" name="search_keyword" class="form-control span1" placeholder="Job keywords (eg: IT)" style="border-left: none;">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4" style="padding: 5px;">
                                                <div class="registration-form-box">
                                                    <select id="select-category" class="span1" style="width: 100%;">
                                                        <option>Select Category</option>
                                                        @foreach($categories as $cat)
                                                            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4" style="padding: 5px;">
                                                <div class="registration-form-box">
                                                    <input type="button" id="submit" name="send" class="btn btn-primary span1" value="Search Job" style="width: 100%;">
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
                <button class="tablinks active" id="filter-1" onclick="openJobsTab(event, 'recent_jobs')">Recent Jobs</button>
                <!--<button class="tablinks" onclick="openJobsTab(event, 'featured_jobs')">Featured Jobs</button>-->
                <button class="tablinks" id="filter-2" onclick="openJobsTab(event, 'parttime_jobs')">Part Time</button>
                <button class="tablinks" id="filter-3" onclick="openJobsTab(event, 'fulltime_jobs')">Full TIme</button>
            </div>

            <!-- Tab content -->
            <div id="recent_jobs" class="tabcontent" style="display:block;">
                
            </div>

            <!--<div id="featured_jobs" class="tabcontent">
                
            </div>-->

            <div id="parttime_jobs" class="tabcontent">
                
            </div>

            <div id="fulltime_jobs" class="tabcontent">
                
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
                        <p>You can get a rough idea about our preformance by looking below real time statistics about No of jobs to apply, No of active Members registered and No of Resumes posted so far.</p>
                    </div>
                    <div style="padding: 0 85px 100px 80px;">
                        <ul id="counter">
                                <li><div class="counter-value" data-count="15" style="display: inline-block;">0</div><div style="display: inline-block;">K</div><span style="display: block;">Job Offers</span></li>
                                <li><div class="counter-value" data-count="4982">3000</div><span style="display: block;">Members</span></li>
                                <li><div class="counter-value" data-count="768">600</div><span style="display: block;">Resumes Posted</span></li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="step-to">
			<div class="container">
				<h1 style="text-align: center;">How It Works</h1><br>
	
				<div class="step-spacer"></div>
				<div id="step-image">
					<div class="row">
						<div class="col-md-4" style="text-align: center;">
							<h6>First Step</h6>
							<div class="step-by-inner">
								<div class="step-by-inner-img">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="113.25px" height="122.88px" viewBox="0 0 113.25 122.88" style="enable-background:new 0 0 113.25 122.88;"
                                        xml:space="preserve">
                                    <style type="text/css">
                                    <![CDATA[
                                        .st0{fill-rule:evenodd;clip-rule:evenodd;}
                                    ]]>
                                    </style>
                                    <g>
                                        <path class="st0" fill="#ff8e3e" d="M77.59,78.72h27.16c4.67,0,8.5,3.82,8.5,8.5v27.17c0,4.67-3.82,8.49-8.5,8.49H77.59c-4.67,0-8.5-3.82-8.5-8.49
                                            V87.22C69.1,82.55,72.92,78.72,77.59,78.72L77.59,78.72z M60.73,113.25c1.76,0,3.18,1.42,3.18,3.18c0,1.76-1.42,3.18-3.18,3.18
                                            H7.39c-2.04,0-3.88-0.83-5.23-2.17C0.83,116.09,0,114.25,0,112.21V7.39c0-2.04,0.83-3.88,2.17-5.23C3.51,0.83,5.36,0,7.39,0h90.81
                                            c2.04,0,3.88,0.84,5.22,2.17c1.34,1.34,2.17,3.19,2.17,5.23v61.23c0,1.76-1.42,3.18-3.18,3.18c-1.75,0-3.18-1.42-3.18-3.18V7.39
                                            c0-0.28-0.12-0.54-0.31-0.73c-0.19-0.19-0.45-0.31-0.72-0.31H7.39c-0.28,0-0.54,0.12-0.74,0.3c-0.18,0.2-0.3,0.45-0.3,0.74v104.8
                                            c0,0.28,0.12,0.54,0.31,0.73c0.19,0.19,0.45,0.31,0.74,0.31L60.73,113.25L60.73,113.25L60.73,113.25z M33.04,56.37
                                            c-0.6-1.04-0.17-4.02,1.13-5.07c3.7-2.16,8.8-1.49,12.36-3.98c0.21-0.31,0.43-0.76,0.65-1.25c0.32-0.74,0.62-1.55,0.81-2.1
                                            c-0.79-0.93-1.47-1.98-2.12-3.02l-2.14-3.41c-0.78-1.17-1.19-2.24-1.21-3.11c-0.01-0.41,0.06-0.78,0.21-1.12
                                            c0.16-0.35,0.4-0.63,0.74-0.86c0.16-0.11,0.33-0.2,0.52-0.26c-0.14-1.85-0.19-4.18-0.1-6.13c0.04-0.46,0.14-0.93,0.26-1.39
                                            c0.55-1.96,1.92-3.53,3.62-4.61c0.94-0.6,1.96-1.05,3.03-1.35c0.68-0.2-0.58-2.37,0.12-2.44c3.4-0.35,8.91,2.76,11.28,5.33
                                            c1.19,1.29,1.94,2.99,2.1,5.25l-0.13,5.56l0,0c0.59,0.18,0.97,0.56,1.13,1.17c0.17,0.68-0.01,1.63-0.59,2.93l0,0
                                            c-0.01,0.02-0.02,0.05-0.04,0.07l-2.44,4.02c-0.9,1.48-1.81,2.96-2.99,4.13c0.11,0.16,0.22,0.31,0.33,0.47
                                            c0.48,0.71,0.97,1.42,1.6,2.05c0.02,0.02,0.04,0.04,0.05,0.07c2.81,1.99,9.65,2.47,12.28,3.93l0.11,0.06
                                            c1.35,1.04,1.77,4.02,1.15,5.06H33.04L33.04,56.37z M30.89,92.81c-1.75,0-3.19-1.44-3.19-3.22c0-1.77,1.42-3.22,3.19-3.22h21.62
                                            c1.76,0,3.19,1.44,3.19,3.22c0,1.78-1.42,3.22-3.19,3.22H30.89L30.89,92.81L30.89,92.81z M30.89,72.68c-1.75,0-3.18-1.42-3.18-3.18
                                            c0-1.75,1.42-3.18,3.18-3.18h42.87c1.76,0,3.18,1.42,3.18,3.18c0,1.76-1.42,3.18-3.18,3.18H30.89L30.89,72.68L30.89,72.68z
                                            M88.41,90.82c0-1.53,1.24-2.77,2.77-2.77s2.77,1.24,2.77,2.77v7.21h7.21c1.53,0,2.77,1.24,2.77,2.77s-1.24,2.77-2.77,2.77h-7.21
                                            v7.21c0,1.53-1.24,2.77-2.77,2.77s-2.77-1.24-2.77-2.77v-7.21h-7.22c-1.53,0-2.77-1.24-2.77-2.77s1.24-2.77,2.77-2.77h7.21
                                            L88.41,90.82L88.41,90.82L88.41,90.82z"/>
                                    </g>
                                    </svg>
								</div>
							</div>
							<h5>Register with us</h5>
						</div>
								
						<div class="col-md-4" style="text-align: center;">
                            <h6>Second Step</h6>
							<div class="step-by-inner">
								<div class="step-by-inner-img">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="121.699px" height="122.881px" viewBox="0 0 121.699 122.881" enable-background="new 0 0 121.699 122.881" xml:space="preserve"><g><path fill="#ff8e3e" d="M53.613,0c14.79,0,28.202,6.019,37.918,15.694c9.715,9.715,15.693,23.089,15.693,37.918 c0,10.817-3.225,20.927-8.732,29.343l23.207,25.293l-16.008,14.633L83.311,98.256c-8.496,5.664-18.725,8.969-29.698,8.969 c-14.79,0-28.203-6.018-37.918-15.693C5.979,81.814,0,68.441,0,53.612c0-14.79,6.018-28.203,15.695-37.918 C25.41,5.979,38.784,0,53.613,0L53.613,0z M62.389,30.703H48.282c-0.082,0-0.154,0.031-0.215,0.092 c-0.051,0.052-0.092,0.134-0.092,0.216v3.172h14.711v-3.172c0-0.082-0.031-0.154-0.092-0.216c-0.053-0.051-0.135-0.092-0.217-0.092 H62.389L62.389,30.703z M28.399,34.281h15.572v-4.465c0-0.678,0.277-1.283,0.719-1.725s1.057-0.719,1.725-0.719h17.83 c0.678,0,1.283,0.277,1.727,0.719c0.439,0.441,0.717,1.057,0.717,1.725v4.465H82.26c0.955,0,1.816,0.39,2.434,1.016 c0.627,0.626,1.016,1.488,1.016,2.433v8.924c-3.832,2.603-7.781,4.831-11.855,6.655c-4.473,2.004-9.1,3.529-13.889,4.537v-3.22 c0-0.657-0.268-1.263-0.698-1.694c-0.431-0.431-1.037-0.698-1.694-0.698h-4.486l0,0c-0.656,0-1.262,0.267-1.693,0.698 c-0.431,0.431-0.698,1.037-0.698,1.694v3.15c-4.673-1.008-9.192-2.509-13.563-4.467c-4.189-1.877-8.247-4.18-12.181-6.877V37.73 c0-0.954,0.39-1.817,1.016-2.433C26.593,34.671,27.455,34.281,28.399,34.281L28.399,34.281L28.399,34.281z M85.709,50.439v23.197 c0,0.955-0.389,1.818-1.016,2.434c-0.627,0.627-1.488,1.016-2.434,1.016H28.399c-0.954,0-1.816-0.389-2.433-1.016 c-0.626-0.627-1.016-1.488-1.016-2.434V50.23c3.477,2.249,7.054,4.207,10.739,5.858c4.705,2.107,9.582,3.711,14.642,4.774 c0.122,0.025,0.244,0.038,0.363,0.038v3.191c0,0.656,0.268,1.262,0.698,1.693c0.431,0.432,1.037,0.697,1.693,0.697h4.486 c0.657,0,1.263-0.266,1.694-0.697c0.431-0.432,0.698-1.037,0.698-1.693V60.87c0.221,0.042,0.455,0.042,0.689-0.007 c5.061-1.063,9.938-2.667,14.641-4.774C78.865,54.489,82.336,52.601,85.709,50.439L85.709,50.439z M87.283,19.942 C78.668,11.329,66.75,5.979,53.613,5.979c-13.138,0-25.056,5.35-33.67,13.963S5.979,40.475,5.979,53.612s5.35,25.056,13.964,33.671 c8.614,8.613,20.532,13.963,33.67,13.963c13.137,0,25.055-5.35,33.67-13.963c8.613-8.615,13.963-20.533,13.963-33.671 S95.896,28.556,87.283,19.942L87.283,19.942L87.283,19.942z"/></g></svg>
								</div>
							</div>
							<h5>Search your job</h5>
						</div>
								
						<div class="col-md-4" style="text-align: center;">
                            <h6>Third Step</h6>
							<div class="step-by-inner">
								<div class="step-by-inner-img">
									<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.45 122.88"><title>career</title><path fill="#ff8e3e" d="M81.71,78.89V66.31h24.74v56.57H17.36V104.37H38.77V91.63H59.56V78.89ZM20.84,51.8l-1.9-1.54a.19.19,0,0,0-.1,0,.14.14,0,0,0-.1.05l-3.25,4a.19.19,0,0,0,0,.1.15.15,0,0,0,.06.1L17.41,56a.2.2,0,0,0,.11,0,.11.11,0,0,0,.09-.05l3.25-4a.13.13,0,0,0,0-.1.14.14,0,0,0-.05-.1ZM15.39,33.28,22,38.63,25.08,35a1.34,1.34,0,0,1,.89-.49,1.37,1.37,0,0,1,1,.28c1.39-1.59,2.77-3.22,4.13-4.82,1-1.3,2-2.48,3-3.52a17.45,17.45,0,0,1,3.21-2.77,14.25,14.25,0,0,1,4.12-1.84h0a22.9,22.9,0,0,1,5.49-.71H47c1.52-.08,3.3,0,4.79,0l1.84,0c7.48,0,11.2,3.66,14.08,6.51l0,0c.59.58,1.15,1.13,1.67,1.57a5.61,5.61,0,0,0,1.47,1h0c.24.08.88-.24,1.59-.6h0a14.7,14.7,0,0,1,1.75-.78c2.5-1.15,5.06-2.54,7.55-3.56a3.53,3.53,0,0,1,1.67-.25,4.71,4.71,0,0,1,1.72.5,5.12,5.12,0,0,1,1.09.74,5.49,5.49,0,0,1,.89,1l0,.05a5.32,5.32,0,0,1,.64,1.23v0a5.29,5.29,0,0,1-.16,3.81,5.26,5.26,0,0,1-.76,1.41,5.41,5.41,0,0,1-2.46,1.84c-1.87.91-3.75,1.84-5.64,2.65a28.06,28.06,0,0,1-4.92,1.76,14.92,14.92,0,0,1-5.87,0l-.18,0a15.51,15.51,0,0,1-6.06-3.55l-1,9.63c.77.4,1.53.75,2.27,1.07.91.39,1.78.73,2.63,1.06h0c5.42,2.11,9.88,3.86,11.36,12.14.18,1,.35,3,.49,5.3.23,3.45.4,7.48.44,8.95v0a.57.57,0,0,1,0,.18.69.69,0,0,1-.66.51h-.11a5.59,5.59,0,0,1-.64.06H74.74c-2,0-4.51,0-5.69,0h-.29c-.42,0-.62,0-.88-.28a1,1,0,0,1-.22-.78v-.4c-.09-1.67-.27-4.47-.45-7-.14-1.8-.27-3.42-.38-4.28a7.19,7.19,0,0,0-.18-.88,4.51,4.51,0,0,0-.32-.79l-.09-.16c-.3-.55-.57-1.06-.78-1.14h0c-.39-.16-.91-.33-1.51-.51s-1.48-.42-2.27-.63-1.72-.43-2.68-.65l-2.28-.51C56.06,60.1,55.53,63,55,66.05c-1.32,7.23-2.72,14.89-5.35,21a.7.7,0,0,1-.87.39,12.86,12.86,0,0,1-2.15.14c-2.13,0-5.08,0-6.35-.08H40c-.43,0-.65,0-.89-.35l0,0A1,1,0,0,1,39,86.3l.07-.33c.13-.67.34-1.71.61-3l1.12-5.21c.74-3.43,1.75-8,2.73-12.39,1.27-5.74,2.4-10.75,2.79-12.47-.36-.41-.72-.83-1-1.27a13.27,13.27,0,0,1-1.12-1.77,9.3,9.3,0,0,1-.81-2.23,7.31,7.31,0,0,1-.11-2.48L45,31.76a4,4,0,0,0-1.75.42h0a6.05,6.05,0,0,0-1.48,1.18c-.49.52-1,1.15-1.5,1.82l0,0c-.41.52-.84,1.08-1.37,1.7-1.29,1.5-2.59,3.06-3.9,4.57a1.34,1.34,0,0,1-.21,1.33L31.6,46.43l6.59,5.35A1.89,1.89,0,0,1,38.87,53a1.86,1.86,0,0,1-.41,1.38L35.6,58a42,42,0,0,1-7.45-1.26,37,37,0,0,1-6.95-2.61l1.14-1.41a1.51,1.51,0,0,0-.22-2.13l-2.2-1.79h0a1.51,1.51,0,0,0-2.13.22l-1.12,1.38a37.44,37.44,0,0,1-3.88-6.12A41.72,41.72,0,0,1,10,37l2.79-3.43a1.88,1.88,0,0,1,2.64-.28Zm9.83,4.94L23.71,40l6.23,5,1.16-1.34c-1.77-1.52-4.21-3.7-5.77-5.33l-.11-.12ZM33.9,60l-7.77,9.58a1.82,1.82,0,0,1-1.26.68,1.89,1.89,0,0,1-1.38-.4L.69,51.4A1.89,1.89,0,0,1,0,50.13a1.83,1.83,0,0,1,.41-1.37l7.84-9.67a43.38,43.38,0,0,0,2.49,6,38.65,38.65,0,0,0,4.5,7L14,53.62a1.51,1.51,0,0,0,.23,2.13l2.2,1.79a1.51,1.51,0,0,0,2.13-.22l1.29-1.59-.06.11a38.81,38.81,0,0,0,7.9,3A42.16,42.16,0,0,0,33.9,60ZM76.65,74.7h0c0,.07,0,.08,0,0Zm-24-74A9.13,9.13,0,0,1,56.25,0a9.28,9.28,0,0,1,8.61,5.73,9.13,9.13,0,0,1,.72,3.56,9.28,9.28,0,0,1-5.73,8.61,9.13,9.13,0,0,1-3.56.72,9.37,9.37,0,0,1-3.56-.7,9.25,9.25,0,0,1-5-5A9.13,9.13,0,0,1,47,9.33,9.28,9.28,0,0,1,52.69.72Z"/></svg>
								</div>
							</div>
							<h5>Apply for job</h5>
						</div>
								
					</div>
				</div>
				<div class="step-spacer"></div>
			</div><br>
		</div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <table id='empTable' class="single-job-items" width='100%' border="1" style='border-collapse: collapse;border: none;'>
                    <thead>
                        <tr>
                        <td>S.no</td>
                        <td>Username</td>
                        </tr>
                    </thead>
                </table>
                </div>
            </div>
        </div>

        
        @include('layouts/scripts')
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        </div>

        @include('layouts/footer')

        <script type=text/javascript>

        function dataTableLoad(){

            var category = $("#select-category").val();
            var search_keyword = $('#search_keyword').val();

            
            if ( $.fn.DataTable.isDataTable( '#empTable' ) ) {
                emptable.clear();
                emptable.destroy();
            }
           
            var emptable = $('#empTable').DataTable({
                processing: true,
                serverSide: true,
                "lengthMenu": [ 5, 10, 25, 50 ],
                "pageLength":5,
                "ajax": {
                    "url": "{{route('ajax_get_jobs2')}}",
                    data: { 
                        category: category,
                        keyword: search_keyword
                    }
                },
                columns: [
                    { data: 'id' },
                    { data: 'username' }
                ]
            });
            

        }

        $(document).ready(function() {
            $.ajax({  //create an ajax request to display.php
                type: "GET",
                url: "get-job-list",
                data: { 
                    type: '1'
                },  
                success: function (data) {
                    $("#recent_jobs").html(data);
                }
            });

            $(".tablinks").click(function() { 
                var fil_id = $(this).attr('id');
                var filtype = fil_id.split("-")[1];
                $.ajax({  //create an ajax request to display.php
                    type: "GET",
                    url: "get-job-list",
                    data: { 
                        type: filtype
                    },  
                    success: function (data1) {
                        var data = data1;
                        if(data === ""){
                            data = '<div style="height: 75px;text-align: center;margin-top: 50px;">No data to display</div>';
                        }
                        if(filtype==1){
                            $("#recent_jobs").html(data);
                        }else if(filtype==2){
                            $("#parttime_jobs").html(data);
                        }else{
                            $("#fulltime_jobs").html(data);
                        }
                        
                    }
                });
            });

            $(document).on("click","#submit",function() {
                dataTableLoad();
                $("#exampleModal").modal('show');
            });
        });
      
      </script>

    </body>
</html>

