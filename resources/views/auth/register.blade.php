<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register Now</title>

        @include('../layouts/links')
    </head>


<body>
    @include('../layouts/navigation_home')

    <div class="regheaderimg text-left">
        <span class="reg-h1">Please Choose Your Role to <span style="color:#f76f0e">Register</span></span>
        <span class="reg-h2">If you are an User who is looking for job oppertunities, please choose "Apply for a Job" </span>
        <span class="reg-h2">Or If you are a Compnay who is looking for post your job oppertunities, please choose "Post a Job" </span>
    </div>

    <!-- Tab content Step 01 job seeker or company-->
    <div id="reg_category" style="display:block;margin-top:75px;">  
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
                <div class="d-card bg-div-1" id="apply_job">
                    <div class="card-body">
                        <p style ="text-align:center;font-size:40px;color:white;font-weight: bold;margin-top:-2px;">Apply for a Job</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-card bg-div-2" id="post_job">
                    <div class="card-body">
                        <p style ="text-align:center;font-size:40px;font-weight: bold;color:black;">Post a Job</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>

    <div id="jobseeker" style="display:none;">
        <div class="tab" style="text-align: center;width: 50rem;margin: auto; margin-top:2%; font-weight: bold;">
            <div class="row">
                <div class="col-md-6 tablinks active" onclick="openRegTypeTab(event, 'reg_jap')">
                    <span>I'm a Japanese Person</span>
                </div>
                <div class="col-md-6 tablinks" onclick="openRegTypeTab(event, 'reg_foreign')">
                    <span>I'm a Foreigner</span>
                </div>
            </div>      
            
            
        </div>

        <!-- Tab content step 02 foriegn or local if job seeker-->
        <div id="reg_jap" class="tabcontent animate__animated animate__slideInLeft" style="display:block;">
            <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" style="display: none;"/>
                        </a>
                    </x-slot>           

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <div>
                                <form id="form_reg_jap" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-card-inner">

                                        <input type="hidden" name="action_reg" value="register_japanese">
                                        <!-- Personal Info -->
                                        <span class="form-card-title">
                                            <x-label for="personal_info" :value="__('Personal Information | For Japanese People')" style="font size: 25px !important;font-weight: bold !important;background-color: #ffc69e"/>
                                        </span>  
                                        
                                        <!-- Name -->
                                        <div class="mt-2">
                                            <x-label for="name" :value="__('Name *')" />

                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                                        </div>
                            
                                        <!-- Full Name -->
                                        <div class="mt-3">
                                            <x-label for="full_name" :value="__('Full Name *')" />

                                            <x-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')" autofocus />
                                        </div>
                                    
                                        <!-- Katakana Name -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="katakana_name" :value="__('Name in Katakana * (How to read the name in KATAKANA)')" />
                                            
                                            <x-input id="katakana_name" class="block mt-1 w-full" type="text" name="katakana_name" :value="old('katakana_name')"/>
                                        </div>

                                        <!-- Gender -->
                                        <div class="mt-3">
                                            <x-label for="gender" :value="__('Gender *')" style="margin-bottom: 10px; display: inline-block; width: 90px;" />

                                            <div class="form-check" style="display: inline-block; width: 90px;">
                                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="M" style="margin-right: 5px;">
                                                <x-label class="form-check-label" for="gender1" :value="__('Male')" />
                                            </div>
                                            <div class="form-check" style="display: inline-block; width: 90px;">
                                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="F" style="margin-right: 5px;">
                                                <x-label class="form-check-label" for="gender2" :value="__('Female')" />
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Date of Birth -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="dob" :value="__('Date of Birth *')" style="display: inline-block;" />
                                            
                                            <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" style="width: auto; display: inline-block; margin-left: 20px;"/>
                                        </div>

                                        <!-- Nationality -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="nationality" :value="__('Nationality *')" />
                                            
                                            <x-input id="nationality" class="block mt-1 w-full" type="text" name="nationality" :value="__('Japanese')" readonly />
                                        </div>

                                        <!-- Telephone Number -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="telephone_number" :value="__('Telephone Number *  (Must Contain Only Digits)')" />
                                            
                                            <x-input id="telephone_number" class="block mt-1 w-full" type="text" name="telephone_number" :value="old('telephone_number')" onkeypress="return magicvalidation(event)" />
                                        </div>

                                        <!-- Categories -->
                                        <div class="mt-3">
                                            <x-label for="salary" :value="__('Categories *')" />
                                            
                                            @foreach($categories as $category)
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="job_categories[]" value="{{$category->id}}"> 
                                                <label class="form-check-label" for="job_categories">{{$category->category_name}}</label>
                                            </div>      
                                            @endforeach 
                                        </div>

                                        
                                    </div></br>

                                    <div class="form-card-inner">

                                        <!-- Edu Info -->
                                        <span class="form-card-title">
                                            <x-label for="edu_info" :value="__('Educational Information')" style="font size: 25px !important;font-weight: bold !important;background-color: #ffc69e"/>
                                        </span>

                                        <!-- School Type -->
                                        <div class="mt-2">
                                            <x-label for="school_type" :value="__('University / Collage / Institute Type *')" />

                                            <select name="school_type" class="form-select" id="school_type">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="GRAD_PHD">Graduate School (Doctor / PH.D)</option>
                                                <option value="GRAD_MSC">Graduate School (master / MASTER)</option>
                                                <option value="GRAD_UNI">University (Undergraduate / BACHELOR)</option>
                                                <option value="JUNIOR_COL">Junior College</option>
                                                <option value="TECH_COL">Technical College</option>
                                                <option value="VOC_COL">Vocational School</option>
                                                <option value="JAP_SCL">Japanese-Language School</option>
                                                <option value="GRAD_RES">Graduate Research Student</option>
                                                <option value="OTHER">Other Institute</option>
                                            </select>
                                        </div>

                                        <!-- School Name -->
                                        <div class="mt-3">
                                            <x-label for="school_name" :value="__('University / Collage / Institute Name *')" />

                                            <x-input id="school_name" class="block mt-1 w-full" type="text" name="school_name" :value="old('school_name')"/>
                                        </div>


                                        <!-- Degree or Course name Name -->
                                        <div class="mt-3">
                                            <x-label for="course_name" :value="__('Degree Name / Major Subject / Course Name *')" />

                                            <x-input id="course_name" class="block mt-1 w-full" type="text" name="course_name" :value="old('course_name')"/>
                                        </div>

                                        <!-- Year of Graduation -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="yog" :value="__('Year of Graduation *')" style="display: inline-block;" />
                                            <select class="yearselect form-select" id="yog" name="yog"></select>
                                        </div>

                                        <!-- Graduation Month -->
                                        <div class="mt-3">
                                            <x-label for="grad_month" :value="__('Month of Graduation *')" />

                                            <select name="grad_month" class="form-select" id="grad_month">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="JAN">January</option>
                                                <option value="FEB">February</option>
                                                <option value="MAR">March</option>
                                                <option value="APR">April</option>
                                                <option value="MAY">May</option>
                                                <option value="JUN">June</option>
                                                <option value="JUL">July</option>
                                                <option value="AUG">August</option>
                                                <option value="SEP">September</option>
                                                <option value="OCT">October</option>
                                                <option value="NOV">November</option>
                                                <option value="DEC">December</option>
                                            </select>
                                        </div>
                                        
                                    </div></br>

                                    <div class="form-card-inner">

                                        <!-- Other Info -->
                                        <span class="form-card-title">
                                            <x-label for="other_info" :value="__('Other Information')" style="font size: 25px !important;font-weight: bold !important;background-color: #ffc69e"/>
                                        </span>

                                        <!-- Work Experience -->
                                        <div class="mt-2">
                                            <x-label for="work_exp" :value="__('Do you have Work Experience (as a Full-Time Employee) *')"/>

                                            <select name="work_exp" class="form-select" id="work_exp">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>

                                        <!-- Years of Previous Work Experience -->
                                        <div class="mt-3">
                                            <x-label for="years_of_exp" :value="__('No of Years of Work Experience (as a Full-Time Employee)')"/>

                                            <select name="years_of_exp" class="form-select" id="years_of_exp">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="0">Less than 1 Year</option>
                                                <option value="1">1 Years</option>
                                                <option value="2">2 Years</option>
                                                <option value="3">More than 2 Years</option>
                                            </select>
                                        </div>

                                        <!-- Japanese Ability -->
                                        <div class="mt-3">
                                            <x-label for="jap_ability" :value="__('Japanese Ability *')"/>

                                            <select name="jap_ability" class="form-select" id="jap_ability">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="J_NAT">Native Level</option>
                                                <option value="J_BUS">Business Level</option>
                                                <option value="J_DAI">Daily Conversation Level</option>
                                                <option value="J_BEG">Greeting level / Beginner Level</option>
                                            </select>
                                        </div>

                                         <!-- Japanese Language Proficiency Test -->
                                         <div class="mt-3">
                                            <x-label for="jap_prof_test" :value="__('Highest Japanese Language Proficiency Test Passed *')"/>

                                            <select name="jap_prof_test" class="form-select" id="jap_prof_test">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="N1">Japanese Language Proficiency Test N1</option>
                                                <option value="N2">Japanese Language Proficiency Test N2</option>
                                                <option value="N3">Japanese Language Proficiency Test N3</option>
                                                <option value="N4">Japanese Language Proficiency Test N4</option>
                                                <option value="N5">Japanese Language Proficiency Test N5</option>
                                            </select>
                                        </div>
                                        
                                        <!-- English Ability -->
                                        <div class="mt-3">
                                            <x-label for="eng_ability" :value="__('English Ability *')"/>

                                            <select name="eng_ability" class="form-select" id="eng_ability">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="E_NAT">Native Level</option>
                                                <option value="E_BUS">Business Level</option>
                                                <option value="E_DAI">Daily Conversation Level</option>
                                                <option value="E_BEG">Greeting level / Beginner Level</option>
                                            </select>
                                        </div>

                                        <!-- English TOEIC Test -->
                                        <div class="mt-3">
                                            <x-label for="eng_test" :value="__('English TOEIC Test *')"/>

                                            <select name="eng_test" class="form-select" id="eng_test">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="T1">TOEIC 395 or less</option>
                                                <option value="T2">TOEIC 400 - 495</option>
                                                <option value="T3">TOEIC 500 - 595</option>
                                                <option value="T4">TOEIC 600 - 695</option>
                                                <option value="T5">TOEIC 700 - 795</option>
                                                <option value="T6">TOEIC 800 - 895</option>
                                                <option value="T7">TOEIC 900 - 990</option>
                                                <option value="T8">Have never taken TOEIC</option>
                                            </select>
                                        </div>

                                        <!-- Other Qualified Languages -->
                                        <div class="mt-3">
                                            <x-label for="other_lang" :value="__('Other Qualified Languages')" />

                                            <x-input id="other_lang" class="block mt-1 w-full" type="text" name="other_lang" :value="old('other_lang')"/>
                                        </div>

                                        <!-- Other Qualifications or Licences -->
                                        <div class="mt-3">
                                            <x-label for="other_qual" :value="__('Do you have any other Qualifications / Licenses ? (bookkeeping, etc.)')"/>
                                            
                                            <textarea name="other_qual" class="text-area" id="other_qual"></textarea>
                                        </div>

                                        <!-- Desired Industry -->
                                        <div class="mt-3">
                                            <x-label for="des_ind" :value="__('Do you have a Desired Industry? (Car maker, IT, not squeezed, etc.)')" />

                                            <x-input id="des_ind" class="block mt-1 w-full" type="text" name="des_ind" :value="old('des_ind')"/>
                                        </div>

                                        <!-- Desired Occupation -->
                                        <div class="mt-3">
                                            <x-label for="des_occu" :value="__('Do you have a Desired Occupation? (Manufacturer Engineer, SE, Sales, not squeezed, etc.)')" />

                                            <x-input id="des_occu" class="block mt-1 w-full" type="text" name="des_occu" :value="old('des_occu')"/>
                                        </div>

                                    </div></br>

                                    <div class="form-card-inner">

                                        <!-- IT Skills -->
                                        <span class="form-card-title">
                                            <x-label for="it_skills" :value="__('If you have IT Skills, Please fill the following (Optional)')" style="font size: 25px !important;font-weight: bold !important;background-color: #ffc69e"/>
                                        </span>

                                        <!-- Development languages -->
                                        <div class="mt-3">
                                            <x-label for="dev_lang" :value="__('Development Languages Qualified (HTML, PHP, Java, C, C #,C ++, Python, etc.)')" />

                                            <x-input id="dev_lang" class="block mt-1 w-full" type="text" name="dev_lang" :value="old('dev_lang')"/>
                                        </div>

                                        <!-- Operating Systems -->
                                        <div class="mt-3">
                                            <x-label for="op_sys" :value="__('OS (Android, Linux, UNIX, Windows, iOS, MacOS, etc.)')" />

                                            <x-input id="op_sys" class="block mt-1 w-full" type="text" name="op_sys" :value="old('op_sys')"/>
                                        </div>

                                        <!-- Database -->
                                        <div class="mt-3">
                                            <x-label for="database" :value="__('DB (MySQL, Oracle, PostgreSQL, SQLServer, Access, etc.)')" />

                                            <x-input id="database" class="block mt-1 w-full" type="text" name="database" :value="old('database')"/>
                                        </div>

                                        <!-- Other Softwares -->
                                        <div class="mt-3">
                                            <x-label for="oth_soft" :value="__('Other Softwares (Flash, Photoshop, Illustrator, Dreamweaver, Maya, etc.)')" />

                                            <x-input id="oth_soft" class="block mt-1 w-full" type="text" name="oth_soft" :value="old('oth_soft')"/>
                                        </div>

                                    </div></br>

                                    <div class="form-card-inner">
                                        <!-- Account Info -->
                                        <span class="form-card-title">
                                            <x-label for="account_info" :value="__('Account Information (For your Login Credentials) ')" style="font size: 25px !important;font-weight: bold !important;background-color: #ffc69e"/>
                                        </span>
                                        <!-- Email Address -->
                                        <div class="mt-2">
                                            <x-label for="email" :value="__('Email * (Use this as your Username when you are Login)')" />

                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-3">
                                            <x-label for="password" :value="__('Password *')" />

                                            <x-input id="password" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password"
                                                            autocomplete="new-password" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mt-3">
                                            <x-label for="password_confirmation" :value="__('Confirm Password *')" />

                                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password_confirmation"/>
                                        </div>
                                    </div>
                                    </br>

                                    <span style="color:red;font-weight:bold;">{{ __('Note : ') }}</span>
                                    <span>{{ __('* is a required field') }}</span>

                                    <div>
                                        <div class="flex items-center justify-end mt-4">

                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                            <x-button class="ml-4">
                                                {{ __('Register') }}
                                            </x-button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                </x-auth-card>
            </x-guest-layout>
        </div>

        <div id="reg_foreign" class="tabcontent animate__animated animate__slideInRight">
            <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" style="display: none;"/>
                        </a>
                    </x-slot>           

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <div>
                                <form id="form_reg_for" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-card-inner">

                                        <input type="hidden" name="action_reg" value="register_foreign">
                                        <!-- Personal Info -->
                                        <span class="form-card-title">
                                            <x-label for="personal_info2" :value="__('Personal Information | For Foreigners')" style="font size: 25px !important;font-weight: bold !important;background-color: #2bcdfd42"/>
                                        </span>  
                                        
                                        <!-- Name -->
                                        <div class="mt-2">
                                            <x-label for="name2" :value="__('Name *')" />

                                            <x-input id="name2" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                                        </div>
                            
                                        <!-- Full Name -->
                                        <div class="mt-3">
                                            <x-label for="full_name2" :value="__('Full Name *')" />

                                            <x-input id="full_name2" class="block mt-1 w-full" type="text" name="full_name2" :value="old('full_name2')"/>
                                        </div>
                                    
                                        <!-- Katakana Name -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="katakana_name" :value="__('Name in Katakana - Optional (How to read the name in KATAKANA)')" />
                                            
                                            <x-input id="katakana_name2" class="block mt-1 w-full" type="text" name="katakana_name2" :value="old('katakana_name2')"/>
                                        </div>

                                        <!-- Gender -->
                                        <div class="mt-3">
                                            <x-label for="gender_foreign" :value="__('Gender *')" style="margin-bottom: 10px; display: inline-block; width: 90px;" />

                                            <div class="form-check" style="display: inline-block; width: 90px;">
                                                <input class="form-check-input" type="radio" name="gender_foreign" id="gender1" value="M" style="margin-right: 5px;">
                                                <x-label class="form-check-label" for="gender1" :value="__('Male')" />
                                            </div>
                                            <div class="form-check" style="display: inline-block; width: 90px;">
                                                <input class="form-check-input" type="radio" name="gender_foreign" id="gender2" value="F" style="margin-right: 5px;">
                                                <x-label class="form-check-label" for="gender2" :value="__('Female')" />
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Date of Birth -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="dob2" :value="__('Date of Birth *')" style="display: inline-block;" />
                                            
                                            <x-input id="dob2" class="block mt-1 w-full" type="date" name="dob2" :value="old('dob2')" style="width: auto; display: inline-block; margin-left: 20px;" />
                                        </div>

                                        <!-- Nationality -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="nationality2" :value="__('Nationality *')" />
                                            
                                            <x-input id="nationality2" class="block mt-1 w-full" type="text" name="nationality2" :value="old('nationality2')" />
                                        </div>

                                        <!-- Telephone Number -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="telephone_number2" :value="__('Telephone Number *  (Must Contain Only Digits)')" />
                                            
                                            <x-input id="telephone_number2" class="block mt-1 w-full" type="text" name="telephone_number2" :value="old('telephone_number2')" onkeypress="return magicvalidation(event)" />
                                        </div>

                                        <!-- Categories -->
                                        <div class="mt-3">
                                            <x-label for="salary" :value="__('Categories *')" />
                                            
                                            @foreach($categories as $category)
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="job_categories2[]" value="{{$category->id}}"> 
                                                <label class="form-check-label" for="job_categories2">{{$category->category_name}}</label>
                                            </div>      
                                            @endforeach 
                                        </div>

                                        
                                    </div></br>

                                    <div class="form-card-inner">

                                        <!-- Edu Info Homeland-->
                                        <span class="form-card-title">
                                            <x-label for="edu_info2_home" :value="__('Educational Information | In Homecountry *')" style="font size: 25px !important;font-weight: bold !important;background-color: #2bcdfd42"/>
                                        </span>

                                        <!-- School Type Homeland-->
                                        <div class="mt-2">
                                            <x-label for="school_type2_home" :value="__('University / Collage / Institute Type *')" />

                                            <select name="school_type2_home" class="form-select" id="school_type2_home">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="GRAD_PHD">Graduate School (Doctor / PH.D)</option>
                                                <option value="GRAD_MSC">Graduate School (master / MASTER)</option>
                                                <option value="GRAD_UNI">University (Undergraduate / BACHELOR)</option>
                                                <option value="JUNIOR_COL">Junior College</option>
                                                <option value="TECH_COL">Technical College</option>
                                                <option value="VOC_COL">Vocational School</option>
                                                <option value="JAP_SCL">Japanese-Language School</option>
                                                <option value="GRAD_RES">Graduate Research Student</option>
                                                <option value="OTHER">Other Institute</option>
                                            </select>
                                        </div>

                                        <!-- School Name Homeland -->
                                        <div class="mt-3">
                                            <x-label for="school_name2_home" :value="__('University / Collage / Institute Name *')" />

                                            <x-input id="school_name2_home" class="block mt-1 w-full" type="text" name="school_name2_home" :value="old('school_name2_home')" />
                                        </div>


                                        <!-- Degree or Course name Homeland -->
                                        <div class="mt-3">
                                            <x-label for="course_name2_home" :value="__('Degree Name / Major Subject / Course Name *')" />

                                            <x-input id="course_name2_home" class="block mt-1 w-full" type="text" name="course_name2_home" :value="old('course_name2_home')" />
                                        </div>

                                        <!-- Year of Graduation Homeland-->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="yog2_home" :value="__('Year of Graduation *')" style="display: inline-block;" />
                                            <select class="yearselect form-select" id="yog2_home" name="yog2_home" ></select>
                                        </div>

                                        <!-- Graduation Month Homeland-->
                                        <div class="mt-3">
                                            <x-label for="grad_month2_home" :value="__('Month of Graduation *')" />

                                            <select name="grad_month2_home" class="form-select" id="grad_month2_home">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="JAN">January</option>
                                                <option value="FEB">February</option>
                                                <option value="MAR">March</option>
                                                <option value="APR">April</option>
                                                <option value="MAY">May</option>
                                                <option value="JUN">June</option>
                                                <option value="JUL">July</option>
                                                <option value="AUG">August</option>
                                                <option value="SEP">September</option>
                                                <option value="OCT">October</option>
                                                <option value="NOV">November</option>
                                                <option value="DEC">December</option>
                                            </select>
                                        </div>
                                        
                                    </div></br>

                                    <div class="form-card-inner">

                                        <!-- Edu Info Japanese -->
                                        <span class="form-card-title">
                                            <x-label for="edu_info2" :value="__('Educational Information | In Japan (Optional)')" style="font size: 25px !important;font-weight: bold !important;background-color: #2bcdfd42"/>
                                        </span>

                                        <!-- School Type -->
                                        <div class="mt-2">
                                            <x-label for="school_type2" :value="__('University / Collage / Institute Type')" />

                                            <select name="school_type2" class="form-select" id="school_type2">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="GRAD_PHD">Graduate School (Doctor / PH.D)</option>
                                                <option value="GRAD_MSC">Graduate School (master / MASTER)</option>
                                                <option value="GRAD_UNI">University (Undergraduate / BACHELOR)</option>
                                                <option value="JUNIOR_COL">Junior College</option>
                                                <option value="TECH_COL">Technical College</option>
                                                <option value="VOC_COL">Vocational School</option>
                                                <option value="JAP_SCL">Japanese-Language School</option>
                                                <option value="GRAD_RES">Graduate Research Student</option>
                                                <option value="OTHER">Other Institute</option>
                                            </select>
                                        </div>

                                        <!-- School Name -->
                                        <div class="mt-3">
                                            <x-label for="school_name2" :value="__('University / Collage / Institute Name')" />

                                            <x-input id="school_name2" class="block mt-1 w-full" type="text" name="school_name2" :value="old('school_name2')"/>
                                        </div>


                                        <!-- Degree or Course name Name -->
                                        <div class="mt-3">
                                            <x-label for="course_name2" :value="__('Degree Name / Major Subject / Course Name')" />

                                            <x-input id="course_name2" class="block mt-1 w-full" type="text" name="course_name2" :value="old('course_name2')"/>
                                        </div>

                                        <!-- Year of Graduation -->
                                        <div class="mt-3">
                                            <x-label class="form-label" for="yog2" :value="__('Year of Graduation')" style="display: inline-block;"/>
                                            <select class="yearselect form-select" id="yog2" name="yog2" ></select>
                                        </div>

                                        <!-- Graduation Month -->
                                        <div class="mt-3">
                                            <x-label for="grad_month2" :value="__('Month of Graduation')"/>

                                            <select name="grad_month2" class="form-select" id="grad_month2">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="JAN">January</option>
                                                <option value="FEB">February</option>
                                                <option value="MAR">March</option>
                                                <option value="APR">April</option>
                                                <option value="MAY">May</option>
                                                <option value="JUN">June</option>
                                                <option value="JUL">July</option>
                                                <option value="AUG">August</option>
                                                <option value="SEP">September</option>
                                                <option value="OCT">October</option>
                                                <option value="NOV">November</option>
                                                <option value="DEC">December</option>
                                            </select>
                                        </div>
                                        
                                    </div></br>

                                    <div class="form-card-inner">

                                        <!-- Other Info -->
                                        <span class="form-card-title">
                                            <x-label for="other_info2" :value="__('Other Information')" style="font size: 25px !important;font-weight: bold !important;background-color: #2bcdfd42"/>
                                        </span>

                                        <!-- Work Experience -->
                                        <div class="mt-2">
                                            <x-label for="work_exp2" :value="__('Do you have Work Experience (as a Full-Time Employee) *')"/>

                                            <select name="work_exp2" class="form-select" id="work_exp2">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>

                                        <!-- Years of Previous Work Experience -->
                                        <div class="mt-3">
                                            <x-label for="years_of_exp2" :value="__('No of Years of Work Experience (as a Full-Time Employee)')"/>

                                            <select name="years_of_exp2" class="form-select" id="years_of_exp2">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="0">Less than 1 Year</option>
                                                <option value="1">1 Years</option>
                                                <option value="2">2 Years</option>
                                                <option value="3">More than 2 Years</option>
                                            </select>
                                        </div>

                                        <!-- Japanese Ability -->
                                        <div class="mt-3">
                                            <x-label for="jap_ability2" :value="__('Japanese Ability *')"/>

                                            <select name="jap_ability2" class="form-select" id="jap_ability2">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="J_NAT">Native Level</option>
                                                <option value="J_BUS">Business Level</option>
                                                <option value="J_DAI">Daily Conversation Level</option>
                                                <option value="J_BEG">Greeting level / Beginner Level</option>
                                            </select>
                                        </div>

                                         <!-- Japanese Language Proficiency Test -->
                                         <div class="mt-3">
                                            <x-label for="jap_prof_test2" :value="__('Highest Japanese Language Proficiency Test Passed *')"/>

                                            <select name="jap_prof_test2" class="form-select" id="jap_prof_test2">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="N1">Japanese Language Proficiency Test N1</option>
                                                <option value="N2">Japanese Language Proficiency Test N2</option>
                                                <option value="N3">Japanese Language Proficiency Test N3</option>
                                                <option value="N4">Japanese Language Proficiency Test N4</option>
                                                <option value="N5">Japanese Language Proficiency Test N5</option>
                                            </select>
                                        </div>
                                        
                                        <!-- English Ability -->
                                        <div class="mt-3">
                                            <x-label for="eng_ability2" :value="__('English Ability *')"/>

                                            <select name="eng_ability2" class="form-select" id="eng_ability2">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="E_NAT">Native Level</option>
                                                <option value="E_BUS">Business Level</option>
                                                <option value="E_DAI">Daily Conversation Level</option>
                                                <option value="E_BEG">Greeting level / Beginner Level</option>
                                            </select>
                                        </div>

                                        <!-- English TOEIC Test -->
                                        <div class="mt-3">
                                            <x-label for="eng_test2" :value="__('English TOEIC Test *')"/>

                                            <select name="eng_test2" class="form-select" id="eng_test2">
                                                <option value="" disabled selected>Select Your Option</option>
                                                <option value="T1">TOEIC 395 or less</option>
                                                <option value="T2">TOEIC 400 - 495</option>
                                                <option value="T3">TOEIC 500 - 595</option>
                                                <option value="T4">TOEIC 600 - 695</option>
                                                <option value="T5">TOEIC 700 - 795</option>
                                                <option value="T6">TOEIC 800 - 895</option>
                                                <option value="T7">TOEIC 900 - 990</option>
                                                <option value="T8">Have never taken TOEIC</option>
                                            </select>
                                        </div>

                                        <!-- Other Qualified Languages -->
                                        <div class="mt-3">
                                            <x-label for="other_lang2" :value="__('Other Qualified Languages')" />

                                            <x-input id="other_lang2" class="block mt-1 w-full" type="text" name="other_lang2" :value="old('other_lang2')"/>
                                        </div>

                                        <!-- Other Qualifications or Licences -->
                                        <div class="mt-3">
                                            <x-label for="other_qual2" :value="__('Do you have any other Qualifications / Licenses ? (bookkeeping, etc.)')"/>
                                            
                                            <textarea name="other_qual2" class="text-area" id="other_qual2"></textarea>
                                        </div>

                                        <!-- Desired Industry -->
                                        <div class="mt-3">
                                            <x-label for="des_ind2" :value="__('Do you have a Desired Industry? (Car maker, IT, not squeezed, etc.)')" />

                                            <x-input id="des_ind2" class="block mt-1 w-full" type="text" name="des_ind2" :value="old('des_ind2')"/>
                                        </div>

                                        <!-- Desired Occupation -->
                                        <div class="mt-3">
                                            <x-label for="des_occu2" :value="__('Do you have a Desired Occupation? (Manufacturer Engineer, SE, Sales, not squeezed, etc.)')" />

                                            <x-input id="des_occu2" class="block mt-1 w-full" type="text" name="des_occu2" :value="old('des_occu2')"/>
                                        </div>

                                    </div></br>

                                    <div class="form-card-inner">

                                        <!-- IT Skills -->
                                        <span class="form-card-title">
                                            <x-label for="it_skills2" :value="__('If you have IT Skills, Please fill the following (Optional)')" style="font size: 25px !important;font-weight: bold !important;background-color: #2bcdfd42"/>
                                        </span>

                                        <!-- Development languages -->
                                        <div class="mt-3">
                                            <x-label for="dev_lang2" :value="__('Development Languages Qualified (HTML, PHP, Java, C, C #,C ++, Python, etc.)')" />

                                            <x-input id="dev_lang2" class="block mt-1 w-full" type="text" name="dev_lang2" :value="old('dev_lang2')"/>
                                        </div>

                                        <!-- Operating Systems -->
                                        <div class="mt-3">
                                            <x-label for="op_sys2" :value="__('OS (Android, Linux, UNIX, Windows, iOS, MacOS, etc.)')" />

                                            <x-input id="op_sys2" class="block mt-1 w-full" type="text" name="op_sys2" :value="old('op_sys2')"/>
                                        </div>

                                        <!-- Database -->
                                        <div class="mt-3">
                                            <x-label for="database2" :value="__('DB (MySQL, Oracle, PostgreSQL, SQLServer, Access, etc.)')" />

                                            <x-input id="database2" class="block mt-1 w-full" type="text" name="database2" :value="old('database2')"/>
                                        </div>

                                        <!-- Other Softwares -->
                                        <div class="mt-3">
                                            <x-label for="oth_soft2" :value="__('Other Softwares (Flash, Photoshop, Illustrator, Dreamweaver, Maya, etc.)')" />

                                            <x-input id="oth_soft2" class="block mt-1 w-full" type="text" name="oth_soft2" :value="old('oth_soft2')"/>
                                        </div>

                                    </div></br>

                                    <div class="form-card-inner">
                                        <!-- Account Info -->
                                        <span class="form-card-title">
                                            <x-label for="account_info2" :value="__('Account Information (For your Login Credentials) ')" style="font size: 25px !important;font-weight: bold !important;background-color: #2bcdfd42"/>
                                        </span>
                                        <!-- Email Address -->
                                        <div class="mt-2">
                                            <x-label for="email2" :value="__('Email * (Use this as your Username when you are Login)')" />

                                            <x-input id="email2" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-3">
                                            <x-label for="password2" :value="__('Password *')" />

                                            <x-input id="password2" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password"
                                                            autocomplete="new-password" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mt-3">
                                            <x-label for="password_confirmation2" :value="__('Confirm Password *')" />

                                            <x-input id="password_confirmation2" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password_confirmation" />
                                        </div>
                                    </div>
                                    </br>

                                    <span style="color:red;font-weight:bold;">{{ __('Note : ') }}</span>
                                    <span>{{ __('* is a required field') }}</span>

                                    <div>
                                        <div class="flex items-center justify-end mt-4">

                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                            <x-button class="ml-4">
                                                {{ __('Register') }}
                                            </x-button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                </x-auth-card>
            </x-guest-layout>
        </div>


    </div>

    <div id="jobposter" style="display:none;">
        <x-guest-layout>
            <x-auth-card>
                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" style="display: none;"/>
                    </a>
                </x-slot>           

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div>
                    <form id="post_jobs" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-card-inner">

                            <input type="hidden" name="action_reg" value="register_company">
                            <!-- Company Info -->
                            <span class="form-card-title">
                                <x-label for="company_info" :value="__('Company Details | To post jobs')" style="font size: 25px !important;font-weight: bold !important;background-color: #ffc69e"/>
                            </span>  
                            
                            <!-- Company Name -->
                            <div class="mt-2">
                                <x-label for="name" :value="__('Name *')" />

                                <x-input id="company_name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                            <!-- Company Description -->
                            <div class="mt-3">
                                <x-label for="company_desc" :value="__('Company Description *')" />

                                <textarea name="company_desc" class="text-area" id="company_desc" required></textarea>
                            </div>
                            <!-- Company Address -->
                            <div class="mt-3">
                                <x-label for="company_address" :value="__('Company Address *')" />

                                <x-input id="company_address" class="block mt-1 w-full" type="text" name="company_address" :value="old('company_address')" required/>
                            </div>
                            <!-- Registration Number -->
                            <div class="mt-3">
                                <x-label for="company_reg" :value="__('Company Registration Number *')" />

                                <x-input id="company_reg" class="block mt-1 w-full" type="text" name="company_reg" :value="old('company_reg')" required/>
                            </div>
                            <!-- Phone Number -->
                            <div class="mt-3">
                                <x-label for="company_phone" :value="__('Contact *')" />

                                <x-input id="company_phone" class="block mt-1 w-full" type="text" name="company_phone" :value="old('company_phone')" required/>
                            </div>
                        </div>

                        </br>

                        <div class="form-card-inner">
                            <!-- Account Info -->
                            <span class="form-card-title">
                                <x-label for="account_info3" :value="__('Account Information (For your Login Credentials) ')" style="font size: 25px !important;font-weight: bold !important;background-color: #ffc69e"/>
                            </span>
                            <!-- Email -->
                            <div class="mt-3">
                                <x-label for="company_email" :value="__('Email *')" />

                                <x-input id="company_email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required/>
                            </div>
                            <!-- Password -->
                            <div class="mt-3">
                                <x-label for="password3" :value="__('Password *')" />

                                <x-input id="password3" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-3">
                                <x-label for="password_confirmation3" :value="__('Confirm Password *')" />

                                <x-input id="password_confirmation3" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />
                            </div>
                        </div>


                        </br>

                        <span style="color:red;font-weight:bold;">{{ __('Note : ') }}</span>
                        <span>{{ __('* is a required field') }}</span>

                        <div>
                            <div class="flex items-center justify-end mt-4">

                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-button class="ml-4">
                                    {{ __('Register') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </x-auth-card>
        </x-guest-layout>

    </div>  

</body>

@include('layouts/scripts')
<script src="../js/year-select.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>
$('.yearselect').yearselect({
  start: 2000,
  end: 2021,
  order:'desc'
});
</script>


<script type="text/javascript">
    function magicvalidation(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return (k == 8 || k == 32 || (k >= 48 && k <= 57));
    }

    $(document).ready(function(){
        $("#apply_job").click(function(){
            $("#jobposter").css("display","none");
            $("#jobseeker").css("display","block");
            $('html,body').animate({
                scrollTop: $("#jobseeker").offset().top-100},
            'slow');
        });

        $("#post_job").click(function(){
            $("#jobseeker").css("display","none");
            $("#jobposter").css("display","block");
        });
    });
</script>

<script>

    $("#form_reg_jap").validate({

        rules: {
            name: "required",
            full_name: "required",
            katakana_name: "required",
            gender: "required",
            dob: "required",
            nationality: "required",
            telephone_number: "required",
            "job_categories[]": "required",
            school_type: "required",
            school_name: "required",
            course_name: "required",
            yog: "required",
            grad_month: "required",
            work_exp: "required",
            years_of_exp: "required",
            jap_ability: "required",
            jap_prof_test: "required",
            eng_ability: "required",
            eng_test: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            password_confirmation: {
                required: true,
                equalTo: "#password"
            }

        },
        messages: {
        
            password_confirmation: {
                equalTo: "Password Not Matching",
            }

        },
    });

    $("#form_reg_for").validate({

        rules: {
            name: "required",
            full_name2: "required",
            katakana_name2: "required",
            gender_foreign: "required",
            dob2: "required",
            nationality2: "required",
            telephone_number2: "required",
            "job_categories2[]": "required",
            school_type2_home: "required",
            school_name2_home: "required",
            course_name2_home: "required",
            yog2_home: "required",
            grad_month2_home: "required",
            work_exp2: "required",
            years_of_exp2: "required",
            jap_ability2: "required",
            jap_prof_test2: "required",
            eng_ability2: "required",
            eng_test2: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            password_confirmation: {
                required: true,
                equalTo: "#password2"
            }

        },
            messages: {
            
            password_confirmation: {
                equalTo: "Password Not Matching",
            }

        },
    });

    $("#post_jobs").validate({

        rules: {
            name: "required",
            company_desc: "required",
            company_address: "required",
            company_reg: "required",
            company_phone: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            password_confirmation: {
                required: true,
                equalTo: "#password3"
            }
        },
                messages: {
                
                password_confirmation: {
                    equalTo: "Password Not Matching",
                }

            },
    });
 </script>

<style>
.items-center a img{
    visibility: hidden;
    height: 20px !important;
}

label.error {
    color: #dc3545;
    font-size: 14px;
}

#gender-error, #gender_foreign-error{
    position: absolute;
    left: 280px;
}

#job_categories\[\]-error, #job_categories2\[\]-error{
    position: absolute;
    margin-top: -20px;
    left: 120px;
}


</style>

</html>