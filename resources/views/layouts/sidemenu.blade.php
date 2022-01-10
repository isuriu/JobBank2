@include('layouts/links')

<div class="wrapper">
    <!--Top menu -->
    <div class="sidebar">
        <div class="hamburger">
            <a href="#">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <!--profile image & text-->
        <div class="profile">
            <img src="{{asset('/img/icons/profile.png')}}" alt="profile_picture">
            <h3>{{ Auth::user()->name }}</h3>
        </div>
        <!--menu item-->
        <ul>
            <li>
                <a href="{{ url('../dashboard') }}" class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Dashboard</span>
                    <span class="mini-icon"><i class="fas fa-home"></i></span>
                </a>
            </li>
            @if(Auth::user()->role =='USER')
                <li>
                    <a href="{{ url('../applied_jobs') }}" class="{{ (request()->is('applied_jobs')) ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Applied Jobs</span>
                        <span class="mini-icon"><i class="fas fa-desktop"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('../find_jobs') }}" class="{{ (request()->is('find_jobs')) ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Find Jobs</span>
                        <span class="mini-icon"><i class="fas fa-user-friends"></i></span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ url('../posted_jobs') }}" class="{{ (request()->is('posted_jobs')) ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Posted Jobs</span>
                        <span class="mini-icon"><i class="fas fa-desktop"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('../post_jobs') }}" class="{{ (request()->is('post_jobs')) ? 'active' : '' }}">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Post a New Job</span>
                        <span class="mini-icon"><i class="fas fa-user-friends"></i></span>
                    </a>
                </li>
            @endif
            
            <li>
                <a href="{{ url('../profile') }}" class="{{ (request()->is('profile')) ? 'active' : '' }}">
                    <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="item">Profile</span>
                    <span class="mini-icon"><i class="fas fa-tachometer-alt"></i></span>
                </a>
            </li>
            
        </ul>
        
    </div>

</div>
@include('layouts/scripts')
<script>
    var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
        document.getElementsByClassName("sidebar")[0].classList.toggle("active");
        document.getElementById("page_content").classList.toggle("page-resize");
    });

    $(document).ready(function(){
        var wid = $(window).width();
        $("#page_content").css("width",(wid-50));

        $(".hamburger").click(function(){
            if($("#page_content").hasClass("page-resize")){
                var wid2 = $(window).width();
                $("#page_content").css("width",(wid2-225));
            }else{
                $("#page_content").css("width",(wid-50));
            }
        });
    });
</script>