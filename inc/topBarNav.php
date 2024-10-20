<style>
  /* General Styling */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Hamburger Icon */
.nav-icon {
    display: none;
    flex-direction: column;
    cursor: pointer;
    margin-left: auto;
}

.nav-icon .bar {
    height: 3px;
    width: 25px;
    background-color: #333;
    margin: 4px 0;
    transition: 0.4s;
}

/* Mobile Navigation Styles */
.nav-menu.active {
    display: block;
}

@media (max-width: 768px) {
    .header-menu-wrap {
        display: none;
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .nav-icon {
        display: flex;
    }

    .header-menu-wrap.active {
        display: flex;
    }

    .nav-menu > li {
        margin: 10px 0;
        text-align: center;
    }
}

/* Dropdown Menu Styling */
.dropdown_menu {
    position: relative;
    display: inline-block;
}

.dropdown_menu a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.dropdown_menu a:hover {
    background-color: #ddd;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

#user_avatar {
    margin-right: 10px;
    border: 2px solid #ddd;
    border-radius: 50%;
}

/* Dropdown List */
.dropdown_menu ul {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 200px;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    padding: 10px 0;
    z-index: 1000;
}

.dropdown_menu ul li {
    list-style: none;
    padding: 2px 15px;
}

.dropdown_menu ul li a {
    color: #333;
    text-decoration: none;
    display: block;
    width: 100%;
    transition: background-color 0.3s;
}

.dropdown_menu ul li a:hover {
    background-color: #e0e0e0;
}

/* Show Dropdown on Hover */
.dropdown_menu:hover ul {
    display: block;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .dropdown_menu ul {
        position: static;
        box-shadow: none;
        background-color: transparent;
    }

    .dropdown_menu ul li {
        text-align: center;
        padding: 8px 0;
    }
}


</style>
    <div class="site-preloader">
        <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>
            <div class="car-detail spoiler"></div>
            <div class="car-detail back"></div>
            <div class="car-detail center"></div>
            <div class="car-detail center1"></div>
            <div class="car-detail front"></div>
            <div class="car-detail wheel"></div>
            <div class="car-detail wheel wheel2"></div>
        </div>
  </div>
<header class="main-header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-wrap">
                <div class="top-left">
                    <p>Reliable Taxi Service & Transport Solutions!</p>
                </div>
                <div class="top-right">
                    <ul class="top-header-nav">
                       
                        <li><a href="./?p=contact">Support</a></li>
                        <li><a href="./?p=faqs">FAQ</a></li>
                    </ul>
                    <ul class="header-social-share">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mid-header">
        <div class="container">
            <div class="mid-header-wrap">
                <div class="site-logo">
                    <a href="./"><img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Logo"></a>
                </div>
                <ul class="header-info">
                    <li>
                        <div class="header-info-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="header-info-text">
                            <h3><span>Call us now</span><a href="tel:5267214392">5267-214-392</a></h3>
                        </div>
                    </li>
                    <li>
                        <div class="header-info-icon">
                            <i class="fas fa-envelope-open"></i>
                        </div>
                        <div class="header-info-text">
                            <h3><span>Email now</span>Info.ridek.com</h3>
                        </div>
                    </li>
                    <li>
                        <div class="header-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="header-info-text">
                            <h3><span>Keffi </span>Nasarawa, Nigeria - 2386</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav-menu-wrapper">
        <div class="container">
            <div class="nav-menu-inner">
                <div class="site-logo">
                    <a href="./"><img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Logo"></a>
                </div>
                <div class="header-menu-wrap">
                    <ul class="nav-menu" id="nav-menu">
                        <li class="<?= isset($page) && $page == 'home' ? 'active' : '' ?>"><a href="./">Home</a></li>
                        <li class="<?= isset($page) && $page == 'about' ? 'active' : '' ?>"><a href="./?p=about">About Us</a></li>
                        <li class="<?= isset($page) && $page == 'cab_available' ? 'active' : '' ?>"><a href="./?p=cab_available">Cab Available</a></li>
                        <li class="<?= isset($page) && $page == 'contact' ? 'active' : '' ?>"><a href="./?p=contact">Contact Us</a></li>
                        <!-- <li class="<?= isset($page) && $page == 'blog' ? 'active' : '' ?>"><a href="./?p=blog">Blog</a></li> -->
                    </ul>
                </div>

                <!-- Hamburger Icon -->
                <div class="nav-icon" id="nav-icon" onclick="toggleNav()">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

                <div class="menu-right-item">
                    <?php if ($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 2): ?>
                        <div class="dropdown_menu">
                        <a href="#" id="navbarDropdownMenuLink" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= validate_image($_settings->userdata('image_path')) ?>" 
                                alt="user_avatar" 
                                id="user_avatar" 
                                class="img-fluid img-thumbnail rounded-circle" 
                                style="width: 30px; height: 30px;">
                            Hi, <?= $_settings->userdata('firstname') ?>
                        </a>
                        <ul aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="./?p=booking_list">My Bookings</a></li>
                            <li><a href="./?p=manage_account">Manage Account</a></li>
                            <li><a href="./classes/Login.php?f=logout_client">Logout</a></li>
                        </ul>
                    </div>

                    <?php else: ?>
                        <a href="./login.php" class="text-reset text-decoration-none mx-2"><b>Login</b></a>
                        <a href="./register.php" class="text-reset text-decoration-none mx-2"><b>Register</b></a>
                        <a href="./driver/login.php" class="text-reset text-decoration-none mx-2"><b>Driver</b></a>
                        <a href="./admin/login.php" class="text-reset text-decoration-none mx-2"><b>Admin</b></a>
                    <?php endif; ?>
                    <a href="./?p=cab_available" class="menu-btn">Book a Cab</a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Toggle Navigation Menu
    function toggleNav() {
        const navMenu = document.getElementById('nav-menu');
        const headerMenuWrap = document.querySelector('.header-menu-wrap');
        navMenu.classList.toggle('active');
        headerMenuWrap.classList.toggle('active');
    }
</script>
