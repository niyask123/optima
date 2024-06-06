<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Future Optima</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    
    
    <style>
  body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
  }
    .navbar {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    position: sticky;
    top: 0;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
    z-index: 1000;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.logo img {
    width:130px;
    height: 90px;
    margin-left: 50px;
}

.nav-list {
    list-style: none;
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
    /*margin-left: auto;*/
    margin-right: 20px; /* Adjust as needed */
}

.nav-item {
    margin-left: 20px;
}

.nav-item a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
    transition: color 0.3s;
}

.nav-item a:hover {
    color: #007BFF; /* Change to your preferred hover color */
}



.nav-item {
    margin-right: 20px; /* Adjust this value for desired spacing */
}

.nav-item:last-child {
    margin-right: 0; /* Ensure no margin on the last item */
}



.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f8f8f8;
    /*padding: 10px 20px;*/
    height:40px;
    font-size: 14px;
}

.top-bar .contact-info span {
    margin-left: 30px;
}

.top-bar .social-icons a {
    margin-right: 25px;
    height:10px;
    color: #333;
    text-decoration: none;
}

.top-bar .social-icons a:hover {
    color: #007bff;
}


@media (max-width: 768px) {
    .top-bar .contact-info,
    .top-bar .social-icons,
    .navbar .nav-list {
        display: none;
    }
    .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .navbar .logo {
        margin: 0 auto;
    }
}


</style>
 <style>
        /* Base styles */
        .mobile-nav {
            display: none; /* Hidden by default */
        }

        /* Mobile view styles */
        @media (max-width: 768px) {
            .mobile-nav {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 20px;
                background-color: #f8f8f8;
                position: relative;
            }
            .mobile-logo {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                height: 40px;
            }
            .menu-btn {
                font-size: 30px;
                cursor: pointer;
            }
        }
         .logo-container img {
    width: 155px; /* Set the desired width */
    height: auto; /* Maintain aspect ratio */
}


/* Basic styles for the mobile navigation */
.mobile-nav {
    display: none; /* Hidden by default, will be shown on mobile view */
    background-color: #333;
    padding: 5px;
    text-align: right;
}

.menu-btn {
    font-size: 24px;
    color: white;
    cursor: pointer;
}

.mobile-menu {
    display: none; /* Hidden by default */
    background-color: #444;
    padding: 10px 0;
    position: fixed;
    top: 0;
    right: 0;
    width: 80px;
    height: 40%; /* Full height */
    z-index: 1000; /* Ensure it's on top */
    transform: translateX(100%); /* Initially hide it offscreen */
    transition: transform 0.3s ease; /* Smooth transition */
}

.mobile-menu.show {
    transform: translateX(0); /* Move into view */
}

.mobile-menu ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.mobile-menu ul li {
    padding: 10px;
    text-align: center;
}

.mobile-menu ul li a {
    color: white;
    text-decoration: none;
    display: block;
}

/* Show the mobile navigation on small screens */
@media (max-width: 768px) {
    .mobile-nav {
        display: block;
    }

    .mobile-menu {
        display: none; /* Start hidden */
    }

    .mobile-menu.show {
        display: block; /* Show when 'show' class is added */
    }
    #navbar_mob_view{
        display:none;
    }
}
/* Style for the close button */
.close-btn {
    font-size: 24px;
    color: white;
    cursor: pointer;
    position: absolute;
    top: 10px;
    right: 20px;
}
        
    </style>
    
     <style>
    .fnt-head {
 font-family: "Times New Roman", Times, serif, Verdana;
}
</style>
    
     <style>
        .top-bar .contact-info span {
            font-size: 14px; /* Adjust this value to make the text smaller */
           
        }

        .top-bar .social-icons a {
            font-size: 14px; /* Adjust this value to make the icons smaller */
            margin-left:5px;
          
        }
    </style>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.querySelector('.menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeBtn = document.querySelector('.close-btn');

    menuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('show');
    });

    closeBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('show');
    });
});
</script>
    </head>
    
    
    <div class="top-bar fnt-style fnt-head" id="navbar_mob_view">
    <div class="contact-info" >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-phone"></i> 8891129333</span>
        <span><i class="fa fa-envelope"></i> info@futureoptimaitsolutions.com</span>
    </div>
    <div class="social-icons" style="  margin-bottom:13px;">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <!--<a href="#"><i class="fa fa-twitter"></i></a>-->
        <a href="#"><i class="fa fa-linkedin"></i></a>
         <a href="https://wa.me/918891129333"><i class="fa fa-whatsapp"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
</div>

<nav class="navbar fnt-style fnt-head">
    <div class="logo-container">
        <a href="index.html" class="logo">
            <img src="assets/images/f-o-logo-blue.png" alt="Logo">
             <br>
           <span style="margin-left:55px; color:black; font-size:14px;">Innovate, Learn, Excel</span>
        </a>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="mobile-nav" style="margin-left: 55px;">
    <span class="menu-btn">&#9776;</span>
    <!--<img src="logo.png" alt="Logo" class="mobile-logo">-->
</div>
<nav class="mobile-menu">
     <span class="close-btn">&times;</span><br>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="course.php">Courses</a></li>
         <li><a href="placement.php">Placements</a></li>
          <li><a href="contact-new.php">Contact</a></li>
        <!-- Add more links as needed -->
    </ul>
</nav>
    <ul class="nav-list">
        <li class="nav-item"><a href="index.html" style="font-weight:bold;">H&nbsp;O&nbsp;M&nbsp;E</a></li>
        <li class="nav-item"><a href="about.php" style="font-weight:bold;">A&nbsp;B&nbsp;O&nbsp;U&nbsp;T&nbsp;</a></li>
        <li class="nav-item"><a href="course.php" style="font-weight:bold;">C&nbsp;O&nbsp;U&nbsp;R&nbsp;S&nbsp;E&nbsp;S</a></li>
        <li class="nav-item"><a href="placement.php" style="font-weight:bold;">P&nbsp;L&nbsp;A&nbsp;C&nbsp;E&nbsp;M&nbsp;E&nbsp;N&nbsp;T&nbsp;S</a></li>
        <li class="nav-item"><a href="contact-new.php" style="font-weight:bold;">C&nbsp;O&nbsp;N&nbsp;T&nbsp;A&nbsp;C&nbsp;T</a></li>
    </ul>
</nav>
