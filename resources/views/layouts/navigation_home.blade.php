<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="img/logo3.png" style="height:50px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('find-job')) ? 'active' : '' }}" href="{{ url('/find-job') }}">Find a Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('post-resume')) ? 'active' : '' }}" href="{{ url('/post-resume') }}">Post a Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('post-job')) ? 'active' : '' }}" href="{{ url('/post-job') }}">Post a Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{ url('/login') }}">Login</a>
                </li>
                <br>
                <li class="nav-item">
                    <div style="position: relative;top: 8px;margin-left: 10px;">
                        <i class="fa fa-globe-asia" style="color: #6b6b6b;display: inline-block;vertical-align: middle;"></i><div id="google_translate_element" style="display: inline-block;"></div>
                    </div>
                </li>
                 <!--<li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>-->
            </ul>
        </div>
    </div>
</nav>

<!--<li class="language-translator">position: absolute;top: 50px;text-align: right;float: right;right: 10px;
    <span id="google_translate_element"></span>
</li>-->

