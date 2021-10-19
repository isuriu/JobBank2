<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register Now</title>

        @include('layouts/links')

    </head>
    <body>
        @include('layouts/navigation_home')
        <div class="regheaderimg text-left">
            <span class="reg-h1">Please Fill the following Registration Form</span>
        </div>

        <div class="container">
            <!-- Tab links -->
            <div class="tab" style="text-align: center;">
                <button class="tablinks active" onclick="openRegTypeTab(event, 'reg_jap')">Recent Jobs</button>
                <button class="tablinks" onclick="openRegTypeTab(event, 'reg_foreign')">Featured Jobs</button>
            </div>
        

            <!-- Tab content -->
            <div id="reg_jap" class="tabcontent" style="display:block;">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name in Furigana Kana</label>
                        <input type="text" class="form-control" id="furigananame">
                        <div class="form-text">Please write in the way how to read the name in Katakana</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="gender1">
                            <label class="form-check-label" for="gender1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="gender2">
                            <label class="form-check-label" for="gender2">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob">
                    </div>
                    <div class="form-group">
                        <label for="nationality">Nationality</label>
                        <select name="nationality" class="selectpicker countrypicker" data-live-search="true" data-default="United States" data-flag="true">
                        </select>
                    </div>

                    <br>
                    <div class="mb-3">
                        <label class="form-label">Telephone Number</label>
                        <input type="text" class="form-control" id="telephonenumber">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Highest Level of Education</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Doctorate or PHD</option>
                            <option value="2">Master's Degree</option>
                            <option value="3">Bachelor's Degree</option>
                            <option value="4">High School</option>
                            <option value="5">Vocational School</option>
                            <option value="6">Junior School</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">University / School Name</label>
                        <input type="text" class="form-control" id="schoolname">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year of Graduation</label>
                        <input type="date" class="form-control" id="yearofgrad">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div id="reg_foreign" class="tabcontent" style="display:block;">
                Foreign
            </div>
        </div>
       

        <div class="content">
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" onclick="openRegTypeTab1(event, 'login')">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" onclick="openRegTypeTab1(event, 'regis')">Register</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="login" class="container tab-pane active">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control is-valid" id="exampleFormControlInput1" placeholder="name@example.com">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control is-invalid" id="exampleInputPassword1" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Password incorrect.</small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    
      <div id="regis" class="container tab-pane fade">
        <form>
          <div class="form-group">
            <label for="InputName">Full Name</label>
            <input type="text" class="form-control is-valid" id="InputName" placeholder="Full Name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="InputUsername">Username</label>
            <input type="text" class="form-control is-valid" id="InputUsername" placeholder="Username">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput2">Email address</label>
            <input type="email" class="form-control is-valid" id="exampleFormControlInput2" placeholder="name@example.com">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Password</label>
            <input type="password" class="form-control is-invalid" id="exampleInputPassword2" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Password incorrect.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPasswordVer">Verify Password</label>
            <input type="password" class="form-control is-invalid" id="exampleInputPasswordVer" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <style>

.content{
  width: 450px;
  height: auto;
  margin: 0 auto;
  padding: 30px;
}
.nav-pills{
  width: 450px;
}
/*.nav-item{
  width: 50%;
}*/
.nav-pills .nav-link{
  font-weight: bold;
  padding-top: 13px;
  text-align: center;
  background: #343436;
  color: #fff;
  border-radius: 30px;
  height: 100px;
}
.nav-pills .nav-link.active{
  background: #fff;
  color: #000;
}
.tab-content{
  position: absolute;
  width: 450px;
  height: auto;
  margin-top: -50px;
  background: #fff;
  color: #000;
  border-radius: 30px;
  z-index: 1000;
  box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.4);
  padding: 30px;
  margin-bottom: 50px;
}
.tab-content button{
  border-radius: 15px;
  width: 100px;
  margin: 0 auto;
  float: right;
}
</style>
        
        @include('layouts/scripts')
    </body>
</html>
