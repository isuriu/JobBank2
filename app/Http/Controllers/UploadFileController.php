<?php

namespace App\Http\Controllers;
use App\Models\applied_jobs;
use App\Models\Job;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index() {
        //return view('job_details');
        return back();
    }

    
    public function showUploadFile(Request $request) {

        $request->validate([
            'upload_cv' => 'required|mimes:docx,pdf|max:2048'
        ]);

        $file = $request->file('upload_cv');

        $fileModel = new applied_jobs;
    
        /*
        //Display File Name
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
    
        //Display File Extension
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
    
        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
    
        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';
    
        //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();*/
    
        //Move Uploaded File
        $destinationPath = 'uploads';
        //$file->move($destinationPath,$file->getClientOriginalName());

        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $request->file('upload_cv')->storeAs('uploads', $fileName, 'public');

        $job_id = $request->job_id;
        $jobdata=Job::find($job_id);

        $fileModel->job_id = $job_id;
        $fileModel->email = $request->applicant_email;
        $fileModel->name = $request->applicant_name;
        $fileModel->job_title = $jobdata->job_title;
        $fileModel->cv_file = $fileName;
        $fileModel->company_name = $jobdata->company_name;
        $fileModel->closing_date = $jobdata->closing_date;

        $fileModel->save();

        return back()->with('message', 'Successfully Applied !');

    }
}
