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
        <span class="reg-h1">Please Fill the following Registration Form</span>
    </div>

     <!-- Tab links -->
     <div class="tab" style="text-align: center;width: 50rem;margin: auto; margin-top:2%; font-weight: bold;">
        <div class="row">
            <div class="col-md-6 tablinks active" onclick="openRegTypeTab(event, 'reg_jap')">
                <span>I'm a Japanese Person</span>
            </div>
            <div class="col-md-6 tablinks" onclick="openRegTypeTab(event, 'reg_foreign')">
                <span>I'm not a Japanese Person</span>
            </div>
        </div>      
        
        
    </div>

    <!-- Tab content -->
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-card-inner">

                                    <!-- Personal Info -->
                                    <span class="form-card-title">
                                        <x-label for="personal_info" :value="__('Personal Info | For Japanese People')" style="font size: 25px !important;font-weight: bold !important;"/>
                                    </span>     
                        
                                    <!-- Full Name -->
                                    <div class="mt-2">
                                        <x-label for="full_name" :value="__('Full Name *')" />

                                        <x-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')" required autofocus />
                                    </div>
                                
                                    <!-- Katakana Name -->
                                    <div class="mt-4">
                                        <x-label class="form-label" for="katakana_name" :value="__('Name in Katakana * (How to read the name in KATAKANA)')" />
                                        
                                        <x-input id="katakana_name" class="block mt-1 w-full" type="text" name="katakana_name" :value="old('katakana_name')" required />
                                    </div>

                                    <!-- Gender -->
                                    <div class="mt-4">
                                        <x-label for="gender" :value="__('Gender *')" style="margin-bottom: 10px; display: inline-block; width: 90px;" />

                                        <div class="form-check" style="display: inline-block; width: 90px;">
                                            <input class="form-check-input" type="radio" name="gender" id="gender1" style="margin-right: 5px;">
                                            <x-label class="form-check-label" for="gender1" :value="__('Male')" />
                                        </div>
                                        <div class="form-check" style="display: inline-block; width: 90px;">
                                            <input class="form-check-input" type="radio" name="gender" id="gender2" style="margin-right: 5px;">
                                            <x-label class="form-check-label" for="gender2" :value="__('Female')" />
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Date of Birth -->
                                    <div class="mt-3">
                                        <x-label class="form-label" for="dob" :value="__('Date of Birth *')" style="display: inline-block;" />
                                        
                                        <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" style="width: auto; display: inline-block; margin-left: 20px;" required />
                                    </div>

                                    <!-- Nationality -->
                                    <div class="mt-4">
                                        <x-label class="form-label" for="nationality" :value="__('Nationality *')" />
                                        
                                        <x-input id="nationality" class="block mt-1 w-full" type="text" name="nationality" :value="__('Japanese')" readonly />
                                    </div>

                                    <!-- Telephone Number -->
                                    <div class="mt-4">
                                        <x-label class="form-label" for="telephone_number" :value="__('Telephone Number *  (Must Contain Only Digits)')" />
                                        
                                        <x-input id="telephone_number" class="block mt-1 w-full" type="text" name="telephone_number" :value="old('telephone_number')" onkeypress="return magicvalidation(event)" required />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <x-label for="email" :value="__('Email *')" />

                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Password *')" />

                                        <x-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="new-password" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <x-label for="password_confirmation" :value="__('Confirm Password *')" />

                                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password_confirmation" required />
                                    </div>
                                </div>

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

    <div id="reg_foreign" class="tabcontent animate__animated animate__slideInRight" style="display:block;">
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-card-inner">

                                    <!-- Personal Info -->
                                    <span class="form-card-title">
                                        <x-label for="personal_info" :value="__('Personal Info | For Foreign People')" style="font size: 25px !important;font-weight: bold !important;"/>
                                    </span>     
                        
                                    <!-- Full Name -->
                                    <div class="mt-2">
                                        <x-label for="full_name" :value="__('Full Name *')" />

                                        <x-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')" required autofocus />
                                    </div>
                                
                                    <!-- Katakana Name -->
                                    <div class="mt-4">
                                        <x-label class="form-label" for="katakana_name" :value="__('Name in Katakana * (How to read the name in KATAKANA)')" />
                                        
                                        <x-input id="katakana_name" class="block mt-1 w-full" type="text" name="katakana_name" :value="old('katakana_name')" required />
                                    </div>

                                    <!-- Gender -->
                                    <div class="mt-4">
                                        <x-label for="gender" :value="__('Gender *')" style="margin-bottom: 10px; display: inline-block; width: 90px;" />

                                        <div class="form-check" style="display: inline-block; width: 90px;">
                                            <input class="form-check-input" type="radio" name="gender" id="gender1" style="margin-right: 5px;">
                                            <x-label class="form-check-label" for="gender1" :value="__('Male')" />
                                        </div>
                                        <div class="form-check" style="display: inline-block; width: 90px;">
                                            <input class="form-check-input" type="radio" name="gender" id="gender2" style="margin-right: 5px;">
                                            <x-label class="form-check-label" for="gender2" :value="__('Female')" />
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Date of Birth -->
                                    <div class="mt-3">
                                        <x-label class="form-label" for="dob" :value="__('Date of Birth *')" style="display: inline-block;" />
                                        
                                        <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" style="width: auto; display: inline-block; margin-left: 20px;" required />
                                    </div>

                                    <!-- Nationality -->
                                    <div class="mt-4">
                                        <x-label class="form-label" for="nationality" :value="__('Nationality *')" />
                                        
                                        <x-input id="nationality" class="block mt-1 w-full" type="text" name="nationality" :value="old('nationality')" required  />
                                    </div>

                                    <!-- Telephone Number -->
                                    <div class="mt-4">
                                        <x-label class="form-label" for="telephone_number" :value="__('Telephone Number *  (Must Contain Only Digits)')" />
                                        
                                        <x-input id="telephone_number" class="block mt-1 w-full" type="text" name="telephone_number" :value="old('telephone_number')" required />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <x-label for="email" :value="__('Email *')" />

                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Password *')" />

                                        <x-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="new-password" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <x-label for="password_confirmation" :value="__('Confirm Password *')" />

                                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password_confirmation" required />
                                    </div>
                                </div>

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

<script type="text/javascript">
    function magicvalidation(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return (k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
</script>

</html>