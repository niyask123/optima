
<head>
    <style>
    
    
    
    
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

footer {
    background-color: #20232A;
    background-image: url('assets/images/meetings-bg.jpg'); /* Add your background image here */
    background-size: cover; /* Cover the entire footer area */
    background-repeat: no-repeat; /* Prevent the background image from repeating */
    color: #fff;
    padding: 90px;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo-section {
    text-align: center;
}

.logo {
    width: 100px;
}

.social-icons {
    margin-top: 10px;
}

.social-icons a {
    color: #fff;
    margin: 0 10px;
    text-decoration: none;
    font-size: 20px;
}

.quick-links ul, .contact-info p {
    list-style: none;
    padding: 0;
}

.quick-links a, .contact-info a {
    color: #61dafb;
    text-decoration: none;
}

.quick-links a:hover, .contact-info a:hover {
    text-decoration: underline;
}

.footer-bottom {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 8px;
   
    margin-top: 20px; /* Add some spacing above this section */
}

.footer-bottom p {
    margin: 5px 0;
}

.footer-bottom a {
    color: #61dafb;
    text-decoration: none;
}

.footer-bottom a:hover {
    text-decoration: underline;
}

/*@media (max-width: 768px) {*/
/*    .footer-container {*/
/*        flex-direction: column;*/
/*        align-items: center;*/
/*    }*/
/*}    */
    
    
/*    .logo-section img {*/
/*    display: block; */
/*    margin-bottom: 15px; */
/*}*/
    
    @media (max-width: 768px) {
    
       #mob-bottom{
           display:inline;
       } 
       
        
    }
    @media (max-width: 768px) {
    .contact-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
}
    
    </style>
   
</head>
<body>
     <footer>
        <div class="footer-container fnt-foot">
            <div class="col-md-2">
            <div class="logo-section">
                <img src="assets/images/future-logo-white.png"  alt="Logo">
             
             <!--<p>Future Optima IT solutions is one for the best software training institute.</p>-->
   <ul class="social-icons1" style="list-style: none; padding: 0;">
    <li style="display: inline-block; margin-right: 10px;"><a href="#" class="fa fa-facebook" style="text-decoration: none; "></a></li>
    <li style="display: inline-block; margin-right: 10px;"><a href="https://wa.me/918891129333" class="fa fa-whatsapp" style="text-decoration: none; "></a></li>
    
  
    
    <li style="display: inline-block;"><a href="#" class="fa fa-instagram" style="text-decoration: none; "></a></li>
    <!-- Add more social media icons as needed -->
</ul>
               </div>
            </div>
            <div class="quick-links">
                 <h3 style="color:white;">Quick Links</h3>
            <ul>
                  <li style="margin-bottom: 10px; text-align:center;"><a href="#"></a></li>
                <li style="margin-bottom: 10px; text-align:center;"><a href="#">About Us</a></li>
                <li style="margin-bottom: 10px; text-align:center;"><a href="#">Our Courses</a></li>
                <li style="margin-bottom: 10px; text-align:center;"><a href="#">Placements</a></li>
                 <li style="margin-bottom: 10px; text-align:center;"><a href="#">Contact Us</a></li>
                <!-- Add more links as needed -->
            </ul>
            </div>
            <div class="contact-info mobile_contact">
                 <h3 style="color:white; white-space: nowrap;">Contact Information</h3>
            
            <p style="text-transform: capitalize; color:white; text-align:center;">Civil Line Rd, Chembumukku, Ernakulam,<br> Kochi, Kerala 682021</p>
            <p style="text-transform: lowercase; color:white; text-align:center;"> info@futureoptimaitsolutions.com</p>
            <p style="color:white; text-align:center;"> 8891129111 </p>
            <p style="color:white; text-align:center;"> 8891129222</p>
            <p style="color:white; text-align:center;">8891129333</p>
            </div>
        </div>
       
    </footer>
     <div class="footer-bottom fnt-foot" id="mob-bottom"  style="height:3px;">
    <p>Copyright © 2024 Future Optima It Solutions. All Rights Reserved.<br>
    Design: <a href="https://eminentsoft.com">Eminentsoft Technologies</a></p>
</div>

</body>



   <!--Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
