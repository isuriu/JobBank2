<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\company_details;
use App\Models\applied_jobs;
use App\Models\job_categories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class JobsController extends Controller
{
    public function getNextJobID() 
    {

        $statement = DB::select("show table status like 'jobs'");

        return $statement[0]->Auto_increment;
    }

    public function store(Request $request){
        
        $jobs = new Job;

        $this->validate($request,[
            'job_title'=>'required',
        ]);

        $login_email = $request->login_email;
        $company_details = company_details::where('email','=',$login_email)->get('company_name','id');
        $company_name = $company_details[0]->company_name;
        $company_id = $company_details[0]->id;

        $jobId = $this->getNextJobID(); 

        $cat_list="";
        foreach($request->input('job_categories') as $value){
            $cat_list .= $value.",";
        }
        $cat_list = rtrim($cat_list, ',');

        $keyword_list="";
        foreach($request->input('key_words') as $value1){
            $keyword_list .= $value1.",";
        }
        $keyword_list = rtrim($keyword_list, ',');

        $jobs->job_id = $jobId;
        $jobs->job_title = $request->job_title;
        $jobs->job_description = $request->job_desc;
        $jobs->job_location = $request->job_location;
        $jobs->expected_salary = $request->salary;
        $jobs->company_name = $company_name;////
        $jobs->categories = $cat_list;
        $jobs->job_type = $request->job_type;
        $jobs->closing_date = $request->closing_date;
        $jobs->requirements = $request->requirements;
        $jobs->key_words = $keyword_list;
        $jobs->company_email = $login_email;
        $jobs->company_id = $company_id;
        $jobs->create_user = $login_email;

        $jobs->save();

        
        return redirect()->back()->with('message','Job created Successfully !');
        
        
    }

    public function getData()
    {
        $myArray=DB::table('jobs')
                    ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                    ->select('jobs.*', 'company_details.address')
                    ->get();
                    
        $jobdata = $this->paginate($myArray);

        $categories = job_categories::all();
        
        return view('find_jobs', compact('jobdata','categories'));
    }

    public function getData2()
    {
        $myArray=DB::table('jobs')
                    ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                    ->select('jobs.*', 'company_details.address')
                    ->get();
                    
        $jobdata = $this->paginate($myArray);

        $categories = job_categories::all();
        
        return view('find_job', compact('jobdata','categories'));
    }


    /*public function getAjaxData(Request $request)
    {
        $myArray=DB::table('jobs')
                    ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                    ->select('jobs.*', 'company_details.address')
                    ->get();
                    
        $jobdata = $this->paginate($myArray);

        $categories = job_categories::all();
        
        return view('ajax_get_jobs', compact('jobdata','categories'));
    }*/

    public function getAjaxData(Request $request){

        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page
   
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
   
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = Job::select('count(*) as allcount')->count();

        $job_Type_str = $request->get("job_type");
        if(empty($job_Type_str)){
            $job_Type_str = "F,P";
        }
        $job_type_arr = explode(",",$job_Type_str);

        $posted_within = $request->get("posted_within");
        $today_date = date('Y-m-d');
        switch ($posted_within) {
            case 'ALL':
                $search_date = 0;
                break;
            case '1':
                $search_date = 1;
                break;
            case '2':
                $search_date = 2;
                break;
            case '3':
                $search_date = 3;
                break;
            case '7':
                $search_date = 7;
                break;
            case '14':
                $search_date = 14;
                break;
            default:
                $search_date = 0;
        }
        
        
        
        
        if($request->get('category') && $request->get('category') != 'ALL'){
            $category = $request->get('category');

            if($search_date == 0){
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_title', 'like', '%' .$searchValue . '%')
                ->whereRaw('FIND_IN_SET('.$category.',jobs.categories)')
                ->whereIn('job_type', $job_type_arr)
                ->select('jobs.*', 'company_details.address')
                ->orderBy($columnName,$columnSortOrder)
                ->skip($start)
                ->take($rowperpage)
                ->get();   
                
                $totalRecordswithFilter = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_title', 'like', '%' .$searchValue . '%')
                ->whereRaw('FIND_IN_SET('.$category.',jobs.categories)')
                ->whereIn('job_type', $job_type_arr)
                ->select('jobs.*', 'company_details.address')->count();
            }else{
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_title', 'like', '%' .$searchValue . '%')
                ->where('jobs.created_at', '<', now()->subDays($search_date)->endOfDay())
                ->whereRaw('FIND_IN_SET('.$category.',jobs.categories)')
                ->whereIn('job_type', $job_type_arr)
                ->select('jobs.*', 'company_details.address')
                ->orderBy($columnName,$columnSortOrder)
                ->skip($start)
                ->take($rowperpage)
                ->get();   
                
                $totalRecordswithFilter = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_title', 'like', '%' .$searchValue . '%')
                ->where('jobs.created_at', '<', now()->subDays($search_date)->endOfDay())
                ->whereRaw('FIND_IN_SET('.$category.',jobs.categories)')
                ->whereIn('job_type', $job_type_arr)
                ->select('jobs.*', 'company_details.address')->count();
            }

            

        }else{

            if($search_date == 0){
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_title', 'like', '%' .$searchValue . '%')
                ->whereIn('job_type', $job_type_arr)
                ->select('jobs.*', 'company_details.address')
                ->orderBy($columnName,$columnSortOrder)
                ->skip($start)
                ->take($rowperpage)
                ->get();

                $totalRecordswithFilter = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_title', 'like', '%' .$searchValue . '%')
                ->whereIn('job_type', $job_type_arr)
                ->select('jobs.*', 'company_details.address')->count();
            }else{
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_title', 'like', '%' .$searchValue . '%')
                ->where('jobs.created_at', '>', now()->subDays($search_date)->endOfDay())
                ->whereIn('job_type', $job_type_arr)
                ->select('jobs.*', 'company_details.address')
                ->orderBy($columnName,$columnSortOrder)
                ->skip($start)
                ->take($rowperpage)
                ->get();
    
                $totalRecordswithFilter = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_title', 'like', '%' .$searchValue . '%')
                ->where('jobs.created_at', '>', now()->subDays($search_date)->endOfDay())
                ->whereIn('job_type', $job_type_arr)
                ->select('jobs.*', 'company_details.address')->count();
            }
            
            
        }

 
        $data_arr = array();
        
        foreach($records as $record){
           $id = '<div class="job-tittle job-tittle2">
                    <a href="#">
                        <h4>'.$record->job_title.'</h4>
                    </a>
                    <ul>
                        <li>'.$record->company_name.'</li>
                        <li><i class="fas fa-map-marker-alt"></i>&nbsp;'.$record->address.'</li>
                        <li>&#165;'.number_format($record->expected_salary, '0', '.', ',').'</li>
                    </ul>
                </div>';

                if ($record->job_type == 'F')
                    $job_type = "Full Time";
                else
                    $job_type = "Part Time";

           $username = '<div class="items-link items-link2 f-right">
                        <span>
                            '.$job_type.'
                        </span>
                        <span>'.date('Y-m-d', strtotime($record->closing_date)).'</span>
                        <br>
                        <a href="/job_details/'.$record->id.'/find">See More >></a>
                    </div>';
   
           $data_arr[] = array(
             "id" => $id,
             "username" => $username
           );
        }

   
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordswithFilter,
           "aaData" => $data_arr
        );
   
        echo json_encode($response);
        exit;
    }

    public function getAjaxData2(Request $request){

        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page
   
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
   
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = Job::select('count(*) as allcount')->count();
        
        $category = $request->get('category');
        $keyword = $request->get('keyword');

        if(!empty($category) && !empty($keyword)){
            $records = DB::table('jobs')
            ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
            ->whereRaw('FIND_IN_SET("'.$category.'",jobs.categories)')
            ->whereRaw('FIND_IN_SET("'.$keyword.'",jobs.key_words)')
            ->select('jobs.*', 'company_details.address')
            ->orderBy($columnName,$columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();   
            
            $totalRecordswithFilter = DB::table('jobs')
            ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
            ->whereRaw('FIND_IN_SET("'.$category.'",jobs.categories)')
            ->whereRaw('FIND_IN_SET("'.$keyword.'",jobs.key_words)')
            ->select('jobs.*', 'company_details.address')->count();
        }else{
            if(!empty($category)){
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->whereRaw('FIND_IN_SET("'.$category.'",jobs.categories)')
                ->select('jobs.*', 'company_details.address')
                ->orderBy($columnName,$columnSortOrder)
                ->skip($start)
                ->take($rowperpage)
                ->get();   
                
                $totalRecordswithFilter = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->whereRaw('FIND_IN_SET("'.$category.'",jobs.categories)')
                ->select('jobs.*', 'company_details.address')->count();
            }else{
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->whereRaw('FIND_IN_SET("'.$keyword.'",jobs.key_words)')
                ->select('jobs.*', 'company_details.address')
                ->orderBy($columnName,$columnSortOrder)
                ->skip($start)
                ->take($rowperpage)
                ->get();   
                
                $totalRecordswithFilter = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->whereRaw('FIND_IN_SET("'.$keyword.'",jobs.key_words)')
                ->select('jobs.*', 'company_details.address')->count();
            }
        }
           
        
            

        $data_arr = array();
        
        foreach($records as $record){
           $id = '<div class="job-tittle job-tittle2">
                    <a href="#">
                        <h4>'.$record->job_title.'</h4>
                    </a>
                    <ul>
                        <li>'.$record->company_name.'</li>
                        <li><i class="fas fa-map-marker-alt"></i>&nbsp;'.$record->address.'</li>
                        <li>&#165;'.number_format($record->expected_salary, '0', '.', ',').'</li>
                    </ul>
                </div>';

                if ($record->job_type == 'F')
                    $job_type = "Full Time";
                else
                    $job_type = "Part Time";

           $username = '<div class="items-link items-link2 f-right">
                        <span>
                            '.$job_type.'
                        </span>
                        <span>'.date('Y-m-d', strtotime($record->closing_date)).'</span>
                        <br>
                        <a href="/job_details/'.$record->job_id.'/find">See More >></a>
                    </div>';
   
           $data_arr[] = array(
             "id" => $id,
             "username" => $username
           );
        }

   
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordswithFilter,
           "aaData" => $data_arr
        );
   
        echo json_encode($response);
        exit;
    }

    public function homeJobList(Request $request){

        $type = $request->get('type');

        switch ($type) {
            case '1':
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->select('jobs.*', 'company_details.address')
                ->orderBy('created_at', 'DESC')->skip(0)->take(3)->get();  
                break;
            case '2':
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_type', 'P')
                ->select('jobs.*', 'company_details.address')
                ->orderBy('created_at', 'DESC')->skip(0)->take(3)->get();  
                break;
            case '3':
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->where('jobs.job_type', 'F')
                ->select('jobs.*', 'company_details.address')
                ->orderBy('created_at', 'DESC')->skip(0)->take(3)->get();  
                break;
            default:
                $records = DB::table('jobs')
                ->leftJoin('company_details', 'jobs.create_user', '=', 'company_details.email')
                ->select('jobs.*', 'company_details.address')
                ->orderBy('created_at', 'DESC')->skip(0)->take(3)->get();  
        }

 
        $data_arr = array();
        
        $html = "";
        foreach($records as $record){
        
            if ($record->job_type == 'F')
                $job_type = "Full Time";
            else
                $job_type = "Part Time";
           $html .= '<div class="job-box bg-white mt-4">
                <div class="p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="mo-mb-2">
                                <img src="img/job-icon.png" alt="" class="img-fluid mx-auto d-block" style="width:70%">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <h5 class="f-18"><a href="#" class="text-dark">'.$record->job_title.'</a></h5>
                                <p class="text-muted mb-0">'.$record->company_name.'</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <p class="text-muted mb-0"><i class="fas fa-map-marker-alt text-custom"></i>'.$record->address.'</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div>
                                <p class="text-muted mb-0 mo-mb-2" style="padding:30px"><span class="text-custom">&#165;</span>'.number_format($record->expected_salary, '0', '.', ',').'</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div>
                                <p class="text-muted mb-0">'.$job_type.'</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light-jobcont">
                    <div class="row">
                        <div class="col-md-10">
                            <div>
                                <p class="text-muted mb-0 mo-mb-2" style="padding-left: 25px;"><span class="text-dark">Closing Date :</span>&nbsp;<span style="color:red">'.$record->closing_date.'</span></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div style="padding-left: 60px;">
                                <a href="#" class="text-custom">Apply Now &nbsp;<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

                if ($record->job_type == 'F')
                    $job_type = "Full Time";
                else
                    $job_type = "Part Time";

           /*$username = '<div class="items-link items-link2 f-right">
                        <span>
                            '.$job_type.'
                        </span>
                        <span>'.date('Y-m-d', strtotime($record->closing_date)).'</span>
                        <br>
                        <a href="/job_details/'.$record->job_id.'/find">See More >></a>
                    </div>';*/

        }

   
        echo $html;
        exit;
    }



    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function getJobData($id,$page)
    {
        $jobdata=Job::find($id);
        //$jobdata=Job::where('job_id', $id)->get();

        $logged_user = Auth::user()->email;

        $condition_arr = ['job_id' => $id, 'email' => $logged_user];
        $applied_results = applied_jobs::where($condition_arr)->get();

        if ($applied_results->isEmpty()) {
            $applied_status = 0;
        }else{
            $applied_status = 1;
        }

        $next_page = $page;
  
        return view('job_details', compact('jobdata','applied_status','next_page'));
    }

    public function getUserAppliedJobs()
    {

        $logged_user = Auth::user()->email;

        //$condition_arr = ['email' => $logged_user];
        //$applied_jobs = applied_jobs::where($condition_arr)->get();

        $applied_jobs = DB::table('applied_jobs')
                ->leftJoin('jobs', 'applied_jobs.job_id', '=', 'jobs.id')
                ->where('applied_jobs.email', $logged_user)
                ->select('applied_jobs.*', 'jobs.expected_salary')
                ->get();

        
        return view('applied_jobs', compact('applied_jobs'));
    }

    public function getDashboardData()
    {


        $logged_user = Auth::user()->email;

        $condition_arr = ['email' => $logged_user];

        $user_role = DB::table('users')->where($condition_arr)->select('role')->get();
        $login_role = $user_role[0]->role;
        $catejobs = array();

        if($user_role[0]->role == 'USER'){
            $applied_count = applied_jobs::where($condition_arr)->count();
            $applied_data = applied_jobs::where($condition_arr)->orderBy('created_at', 'DESC')->skip(0)->take(5)->get();
            $user_category = DB::table('user_details')->where($condition_arr)->select('categories')->get();
            $user_cat = $user_category[0]->categories;
            /*$cat_arr = explode(",",$user_cat);
            foreach($cat_arr as $val){
                $catejobs[] = DB::table('jobs')->whereRaw('FIND_IN_SET("'.$val.'",jobs.categories)')->select('job_title','company_name','closing_date')->get();
            }
            $category_jobs = $catejobs;*/
            $category_jobs = DB::table('jobs')->whereRaw('FIND_IN_SET("'.$user_cat.'",jobs.categories)')->select('job_title','company_name','closing_date')->get();
            
        }else{
            $applied_count = 0;
            $applied_data = array();
            //$user_category = DB::table('user_details')->where($condition_arr)->select('categories')->get();
            $category_jobs = array();
        }
        
  
        return view('dashboard', compact('login_role','applied_count','applied_data','category_jobs'));
    }

    public function getData3()
    {
        $job_count=DB::table('jobs')->count();
        $user_count = DB::table('user_details')->count();
        $applied_count = DB::table('applied_jobs')->count();
        $company_count = DB::table('company_details')->count();

        $categories = job_categories::all();
        
        return view('welcome', compact('categories','job_count','user_count','applied_count','company_count'));
    }

    public function getPosted()
    {
        $logged_user = Auth::user()->email;

        $condition_arr = ['company_email' => $logged_user];

        $job_data = DB::table('jobs')->where($condition_arr)->select('jobs.*')->get();
        
        return view('posted_jobs', compact('job_data'));
    }

}
