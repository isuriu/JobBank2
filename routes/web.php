<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','App\Http\Controllers\JobsController@getData3')->name('welcome');

Route::get('/post-resume', function () {
    return view('post_resume');
});

/*Route::get('/find_job', function () {
    return view('find_job');
});*/
Route::get('/find_job','App\Http\Controllers\JobsController@getData2');


Route::get('/post_jobs', function () {
    $data=App\Models\job_categories::all();
    return view('post_jobs')->with('categories',$data)->with('message','');
});

Route::get('/posted-jobs', function () {
    $data1=App\Models\Job::all();
    return view('posted_jobs')->with('job_data',$data1);
});

Route::get('/about', function () {
    return view('about');
});

/*Route::get('/applied_jobs', function () {
    return view('applied_jobs');
});*/
Route::get('/applied_jobs', 'App\Http\Controllers\JobsController@getUserAppliedJobs')->middleware('auth');

Route::get('/find_jobs','App\Http\Controllers\JobsController@getData')->middleware('auth');

//Route::get('/ajax_get_jobs','App\Http\Controllers\JobsController@getAjaxData');
Route::get('/ajax_get_jobs','App\Http\Controllers\JobsController@getAjaxData')->name('ajax_get_jobs');
Route::get('/ajax_get_jobs2','App\Http\Controllers\JobsController@getAjaxData2')->name('ajax_get_jobs2');


Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/dashboard', [App\Http\Controllers\JobsController::class, 'getDashboardData'])->middleware(['verified'])->name('dashboard');


Route::post('/saveJob', 'App\Http\Controllers\JobsController@store');

//Route::get('/job_details/{id}/{page}', 'App\Http\Controllers\JobsController@getJobData');
//Route::get('/job_details/{id}/{page}', array('before' => 'auth', 'uses' => 'App\Http\Controllers\JobsController@getJobData'));
Route::get('/job_details/{id}/{page}', [App\Http\Controllers\JobsController::class, 'getJobData'])
                ->middleware('auth');
/*Route::get('/job_details/{id}/{page}', function () {
    // Only authenticated users may enter...
})->middleware('auth');*/

Route::get('/uploadfile','App\Http\Controllers\UploadFileController@index');
Route::post('/uploadfile','App\Http\Controllers\UploadFileController@showUploadFile');

Route::get('get-job-list','App\Http\Controllers\JobsController@homeJobList');

require __DIR__.'/auth.php';
