@include('layouts/sidemenu')

<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <br>
 
    <div class="container-fluid">
        <div class="form-card">
            <div class="form-card-inner"> 
                <div class="card-body">
                    <span style="font-size: 24px; font weight: bold;">{{$jobdata->job_title}} - <span style="color: f76f0e;"> {{$jobdata->company_name}} </span></span><br>

                    <div style="font-size: 12px;">
                        <i class="fas fa-map-marker-alt"></i>&nbsp;{{$jobdata->job_location}}
                    </div>
                    <div style="font-size: 15px; margin-top: 20px;">
                        <pre>{{$jobdata->job_description}}</pre>
                    </div>

                    <div style="font-size: 15px; margin-top: 20px;">
                        <span style="font-weight: bold;"><i>Requirements:</i></span><br>
                        {!! nl2br(e($jobdata->requirements)) !!}
                    </div>

                    <div style="font-size: 15px; margin-top: 20px; color: #3404c5;">
                        <b>Job Type:</b>
                        @if ($jobdata->job_type == 'F')
                            Full Time
                        @else
                            Part Time
                        @endif
                    </div>
                    <div style="font-size: 15px; margin-top: 20px; color: #3404c5;">
                        <b>Salary:</b>
                        &#165;{{number_format($jobdata->expected_salary, '0', '.', ',')}}
                    </div>

                    <div style="font-size: 15px; margin-top: 20px; color: red;">
                        <b>Closing Date:</b>
                        {{$jobdata->closing_date}}
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-6"></div>
                        <div class="col-md-3" style="text-align: right;">
                            @if($next_page == 'applied')
                                <a class="btn btn-grey" href="{{ url('/applied_jobs') }}">Back</a>
                            @else
                                <a class="btn btn-grey" href="{{ url('/find_jobs') }}">Back</a>
                            @endif
                        </div>
                        <div class="col-md-3">
                            @if (trim($applied_status) == 1)
                                <button type="submit" class="btn btn-yellow profile-button" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>Applied</button>
                            @else
                                <button type="submit" class="btn btn-green profile-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                            @endif
                        </div>
                        
                    </div>

                </div>
            </div>   
        </div>
    </div>
    
</x-app-layout>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/uploadfile" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Apply for {{$jobdata->job_title}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">

                    <input type="hidden" name="job_id" value="{{$jobdata->id}}">

                    <!-- Name -->
                    <div class="mt-2">
                        <x-label for="applicant_name" :value="__('Name')" />

                        <x-input id="applicant_name" class="block mt-1 w-full" type="text" name="applicant_name" value="{{ Auth::user()->name }}" readonly />
                    </div>
                    <!-- Email -->
                    <div class="mt-2">
                        <x-label for="applicant_email" :value="__('Email')" />

                        <x-input id="applicant_email" class="block mt-1 w-full" type="text" name="applicant_email" value="{{ Auth::user()->email }}" readonly />
                    </div>
                    <br>
                    <!-- CV -->
                    <div class="custom-file">
                        <label class="custom-file-label" for="chooseFile">Upload your CV</label>
                        <input type="file" name="upload_cv" class="custom-file-input" id="chooseFile">
                        
                    </div>
                    <!-- Message -->
                    <div class="mt-3">
                        <x-label for="applicant_msg" :value="__('Message *')" />

                        <textarea name="applicant_msg" class="text-area" id="applicant_msg" required></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Apply</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/js/jquery-bootstrap-purr.min.js"></script>


@if(session()->has('message'))

<script>
    var msg = {!! json_encode(session()->get('message')) !!};
    if(msg != ''){
        $.bootstrapPurr(msg,{type: 'success'});
    }    
</script> 

@endif

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <script>
            $.bootstrapPurr({!! json_encode($error) !!},{type: 'danger'}); 
        </script> 
    @endforeach
@endif
