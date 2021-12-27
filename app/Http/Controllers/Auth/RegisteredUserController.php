<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user_details;
use App\Models\company_details;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\job_categories;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = job_categories::all();
        return view('auth.register', compact('categories')); 
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //$action = $request->has('input')::get('action_reg');

        // handle the register request
        //if ($request->has('register_japanese')) {
        if($request->action_reg == 'register_japanese'){
            
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'USER'
            ]);

            $cat_list="";
            foreach($request->input('job_categories') as $value){
                $cat_list .= $value.",";
            }
            $cat_list = rtrim($cat_list, ',');

            $user_info = user_details::create([
                'name' => $request->name,
                'full_name' => $request->full_name,
                'name_in_katakana' => $request->katakana_name,
                'email' => $request->email,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'nationality' => $request->nationality,
                'country_status' => '1',
                'contact' => $request->telephone_number,
                'organization_type_jp' => $request->school_type,
                'organization_jp' => $request->school_name,
                'degree_jp' => $request->course_name,
                'grad_year_jp' => $request->yog,
                'grad_month_jp' => $request->grad_month,
                'is_experience' => $request->work_exp,
                'experience' => $request->years_of_exp,
                'jap_ability' => $request->jap_ability,
                'jap_level' => $request->jap_prof_test,
                'english_ability' => $request->eng_ability,
                'english_level' => $request->eng_test,
                'other_languages' => $request->other_lang,
                'other_qualifications' => $request->other_qual,
                'desired_industry' => $request->des_ind,
                'desired_ocupation' => $request->des_occu,
                'dev_languages' => $request->dev_lang,
                'os' => $request->op_sys,
                'db' => $request->database,
                'other_softwares' => $request->oth_soft,
                'categories' => $cat_list,
                'create_user' => $request->email
            ]);
    
            event(new Registered($user));
    
            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);


        // handle the login request
        } elseif($request->action_reg == 'register_foreign'){
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'USER'
            ]);

            $cat_list2="";
            foreach($request->input('job_categories2') as $value2){
                $cat_list2 .= $value2.",";
            }
            $cat_list2 = rtrim($cat_list2, ',');

            $user_info = user_details::create([
                'name' => $request->name,
                'full_name' => $request->full_name2,
                'name_in_katakana' => $request->katakana_name2,
                'email' => $request->email,
                'gender' => $request->gender_foreign,
                'dob' => $request->dob2,
                'nationality' => $request->nationality2,
                'country_status' => '0',
                'contact' => $request->telephone_number2,
                'organization_type_jp' => $request->school_type2,
                'organization_jp' => $request->school_name2,
                'degree_jp' => $request->course_name2,
                'grad_year_jp' => $request->yog2l,
                'grad_month_jp' => $request->grad_month2,
                'organization_type_foreign' => $request->school_type2_home,
                'organization_foreign' => $request->school_name2_home,
                'degree_foreign' => $request->course_name2_home,
                'grad_year_foreign' => $request->yog2_home,
                'grad_month_foreign' => $request->grad_month2_home,
                'is_experience' => $request->work_exp2,
                'experience' => $request->years_of_exp2,
                'jap_ability' => $request->jap_ability2,
                'jap_level' => $request->jap_prof_test2,
                'english_ability' => $request->eng_ability2,
                'english_level' => $request->eng_test2,
                'other_languages' => $request->other_lang2,
                'other_qualifications' => $request->other_qual2,
                'desired_industry' => $request->des_ind2,
                'desired_ocupation' => $request->des_occu2,
                'dev_languages' => $request->dev_lang2,
                'os' => $request->op_sys2,
                'db' => $request->database2,
                'other_softwares' => $request->oth_soft2,
                'categories' => $cat_list2,
                'create_user' => $request->email
            ]);
    
            event(new Registered($user));
    
            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);

        }elseif($request->action_reg == 'register_company'){

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'COMPANY'
            ]);

            $company_info = company_details::create([
                'company_name' => $request->name,
                'description' => $request->company_desc,
                'address' => $request->company_address,
                'registration_number' => $request->company_reg,
                'contact' => $request->company_phone,
                'email' => $request->email,
            ]);

            event(new Registered($user));
    
            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);

        }

        
    }
}
