<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Find a Job</title>

        @include('layouts/links')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />       

        <style>
            a{
                text-decoration: none;
            }
            .navbar{
                background-color: #fff !important;
            }
        </style>
    </head>
    <body>
        @include('layouts/navigation_home')
        
        <div class="container-fluid" style="margin-top: 90px;">
 
            <div class="card">
                <div class="card-body">
                    <!-- Job List Area Start -->
                    <div class="job-listing-area pt-120 pb-120">
                        <div class="container">
                            <div class="row">
                                <!-- Left content -->
                                <div class="col-xl-3 col-lg-3 col-md-4">
                                    <div class="row">
                                        <div class="col-12">
                                                <div class="small-section-tittle2 mb-45">
                                                <div class="ion"> <svg 
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="20px" height="12px">
                                                <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                                    d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                                </svg>
                                                </div>
                                                <h4>Filter Jobs</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Job Category Listing start -->
                                    <div class="job-category-listing">
                                        <!-- single one -->
                                        <div class="single-listing">
                                        <div class="small-section-tittle2">
                                                <h4>Job Category</h4>
                                        </div>
                                            <!-- Select job items start -->
                                            <div class="select-job-items2">
                                                <select id="select_category">
                                                    <option value="ALL">All Category</option>
                                                    @foreach($categories as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--  Select job items End-->
                                            <!-- select-Categories start -->
                                            <div class="select-Categories">
                                                <div class="small-section-tittle2">
                                                    <h4>Job Type</h4>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="job_type[]" value="F">Full Time</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="job_type[]" value="P">Part Time</label>
                                                </div>
                                            </div>
                                            <!-- select-Categories End -->
                                        </div>
                                        <!-- single two -->
                                        <!--<div class="single-listing">
                                            
                                            <div class="select-Categories">
                                                <div class="small-section-tittle2">
                                                    <h4>Experience</h4>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="experience[]" value="1">1-2 Years</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="experience[]" value="2">2-3 Years</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="experience[]" value="3">3-6 Years</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="experience[]" value="4">6-more..</label>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>-->
                                        <!-- single three -->
                                        <div class="single-listing">
                                            <!-- select-Categories start -->
                                            <div class="select-Categories">
                                                <div class="small-section-tittle2">
                                                    <h4>Posted Within</h4>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="radio" name="posted_within[]" value="ALL" checked>Any</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="radio" name="posted_within[]" value="1">Today</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="radio" name="posted_within[]" value="2">Last 2 days</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="radio" name="posted_within[]" value="3">Last 3 days</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="radio" name="posted_within[]" value="7">Last week</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="radio" name="posted_within[]" value="14">Last 2 weeks</label>
                                                </div>
                                            </div>
                                            <!-- select-Categories End -->
                                        </div>
                                        
                                        <!--<div class="slidecontainer">
                                            <div class="small-section-tittle2">
                                                <h4>Price</h4>
                                            </div>
                                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                        </div>-->


                                    </div>
                                    <!-- Job Category Listing End -->
                                </div>
                                <!-- Right content -->
                                <div class="col-xl-9 col-lg-9 col-md-8">
                                    <!-- Featured_job_start -->
                                    <section class="featured-job-area">
                                        <div class="container">
                                        
                                            <!-- Count of Job list End -->

                                            <!--<div id="table_data"></div>-->

                                            <table id='empTable' class="single-job-items" width='100%' border="1" style='border-collapse: collapse;border: none;'>
                                                <thead>
                                                    <tr>
                                                    <td>S.no</td>
                                                    <td>Username</td>
                                                    </tr>
                                                </thead>
                                            </table>
                                            
                                        </div>
                                    </section>
                                    
                                    <!-- Featured_job_end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Job List Area End -->

                </div>
            </div>
            </div>
    
        @include('layouts/scripts')
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    </body>
</html>


<script type="text/javascript">


    function dataTableLoad(type){

        if(type == 1){
            var emptable = $('#empTable').DataTable({
                processing: true,
                serverSide: true,
                "lengthMenu": [ 5, 10, 25, 50 ],
                "pageLength":5,
                "ajax": {
                    "url": "{{route('ajax_get_jobs')}}"
                },
                columns: [
                    { data: 'id' },
                    { data: 'username' }
                ]
            });
        }else if(type == 2){
            var category = $("#select_category").val();
            var job_type = '';
            $('input[name="job_type[]"]:checked').each(function() {
                
                job_type += $(this).val()+',';
            });
            job_type = job_type.slice(0,-1);
            if(job_type === ''){
                job_type = "F,P"
            }

            var posted_within = $('input[name="posted_within[]"]:checked').val();
            
            $('#empTable').DataTable().ajax.url("{{route('ajax_get_jobs')}}?category="+category+"&job_type="+job_type+"&posted_within="+posted_within).load();
        }
        
    }
    $(document).ready(function(){

        dataTableLoad(1);

        $("#select_category, input[name='job_type[]'], input[name='posted_within[]']").change(function(){
            dataTableLoad(2);
            
        });

    });
</script>