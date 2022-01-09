<!DOCTYPE html>
@include('layouts/sidemenu')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />

<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <br>
    <nav aria-label="breadcrumb" style="padding-left: 15px;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Create new Job</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="form-card">
            <div class="card-body">
                <form id="post_job_form" method="POST" action="/saveJob">
                    @csrf

                    <div class="form-card-inner">

                        <input type="hidden" name="login_email" value="{{ Auth::user()->email }}">
                        <!-- Job Info -->
                        <span class="form-card-title">
                            <x-label for="company_info" :value="__('Job Details')" style="font size: 25px !important;font-weight: bold !important;background-color: #ffc69e"/>
                        </span>  
                        
                        <!-- Job Title -->
                        <div class="mt-2">
                            <x-label for="job_title" :value="__('Job Title *')" />

                            <x-input id="job_title" class="block mt-1 w-full" type="text" name="job_title" :value="old('job_title')" autofocus />
                        </div>
                        <!-- Job Description -->
                        <div class="mt-3">
                            <x-label for="job_desc" :value="__('Job Description *')" />

                            <textarea name="job_desc" class="text-area" id="job_desc"></textarea>
                        </div>
                        <!-- Job Location -->
                        <div class="mt-3">
                            <x-label for="job_location" :value="__('Job Location *')" />

                            <textarea name="job_location" class="text-area" id="job_location"></textarea>
                        </div>
                        <!-- Salary -->
                        <div class="mt-3">
                            <x-label for="salary" :value="__('Salary *')" style="display: inline-block;"/><span style="font-size: 14px;display: inline-block;">&#165;</span>

                            <x-input id="salary" class="block mt-1 w-full" type="text" name="salary" :value="old('salary')" onkeypress="return magicvalidation(event)"/>
                        </div>
                        <!-- Categories -->
                        <div class="mt-3">
                        <x-label for="salary" :value="__('Categories *')" />
                            <br><br>
                            @foreach($categories as $category)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="job_categories[]" value="{{$category->id}}"> 
                                <label class="form-check-label" for="job_categories">{{$category->category_name}}</label>
                            </div>      
                            @endforeach 
                        </div>
                        <!-- Job Type -->
                        <div class="mt-3">
                            <x-label for="job_type" :value="__('Job Type *')" />

                            <select name="job_type" class="form-select" id="job_type">
                                <option value="" selected disabled>Select your choice</option>
                                <option value="F">Full Time</option>
                                <option value="P">Part Time</option>
                            </select>
                        </div>
                        <!-- Closing Date -->
                        <div class="mt-2">
                            <x-label for="closing_date" :value="__('Closing Date *')" />

                            <input id="closing_date" class="block mt-1 w-full" type="date" name="closing_date" :value="old('closing_date')"/>
                        </div>
                        <!-- Requirements -->
                        <div class="mt-3">
                            <x-label for="requirements" :value="__('Requirements *')" />

                            <textarea name="requirements" class="text-area" id="requirements"></textarea>
                        </div>
                        <!-- Key Words -->
                        <div class="mt-2">
                            <x-label for="key_words" :value="__('Key Words')" />

                            <select class="form-control" name="key_words[]" id="key_words" multiple="multiple">
                            
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Submit') }}
                                </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>   

    </div>
    
</x-app-layout>

<script src="js/jquery-bootstrap-purr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
    $('#key_words').select2({
        multiple: true,
        tags: true,
        createTag: function (params) {
            return {
            id: params.term,
            text: params.term,
            newOption: true
            }
        }
    });
});

var msg = {!! json_encode($message) !!};
console.log(msg);
if(msg != ''){
    $.bootstrapPurr(msg,{type: 'success'});
}

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



</script> 

<script>

    function magicvalidation(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return (k == 8 || (k >= 48 && k <= 57));
    }

    $("#post_job_form").validate({

        rules: {
            job_title: "required",
            job_desc: "required",
            job_location: "required",
            salary: "required",
            "job_categories[]": "required",
            job_type: "required",
            closing_date: "required",
            "job_categories[]": "required",
            requirements: "required",
        }
    });

</script>

<style>
    #select2-key_words-container .select2-selection__choice__remove{
        font-size: 16px;
    }
    #select2-key_words-container .select2-selection__choice__display{
        font-size: 16px;
    }
    label.error {
        color: #dc3545;
        font-size: 14px;
    }

    #job_categories\[\]-error{
        position: absolute;
        margin-top: -20px;
        left: 120px;
    }
</style>

