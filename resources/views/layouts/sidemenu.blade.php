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
            <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg" alt="profile_picture">
            <h3>Anamika Roy</h3>
            <p>Designer</p>
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
            <li>
                <a href="{{ url('../myjobs') }}" class="{{ (request()->is('myjobs')) ? 'active' : '' }}">
                    <span class="icon"><i class="fas fa-desktop"></i></span>
                    <span class="item">Applied Jobs</span>
                    <span class="mini-icon"><i class="fas fa-desktop"></i></span>
                </a>
            </li>
            <li>
                <a href="{{ url('../find') }}" class="{{ (request()->is('find')) ? 'active' : '' }}">
                    <span class="icon"><i class="fas fa-user-friends"></i></span>
                    <span class="item">Find Jobs</span>
                    <span class="mini-icon"><i class="fas fa-user-friends"></i></span>
                </a>
            </li>
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