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
                <a href="#" class="active">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Home</span>
                    <span class="mini-icon"><i class="fas fa-home"></i></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-desktop"></i></span>
                    <span class="item">My Dashboard</span>
                    <span class="mini-icon"><i class="fas fa-desktop"></i></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-user-friends"></i></span>
                    <span class="item">People</span>
                    <span class="mini-icon"><i class="fas fa-user-friends"></i></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="item">Perfomance</span>
                    <span class="mini-icon"><i class="fas fa-tachometer-alt"></i></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-database"></i></span>
                    <span class="item">Development</span>
                    <span class="mini-icon"><i class="fas fa-database"></i></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-chart-line"></i></span>
                    <span class="item">Reports</span>
                    <span class="mini-icon"><i class="fas fa-chart-line"></i></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-user-shield"></i></span>
                    <span class="item">Admin</span>
                    <span class="mini-icon"><i class="fas fa-user-shield"></i></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-cog"></i></span>
                    <span class="item">Settings</span>
                    <span class="mini-icon"><i class="fas fa-cog"></i></span>
                </a>
            </li>
        </ul>
        
    </div>

</div>
<script>
    var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    });
</script>