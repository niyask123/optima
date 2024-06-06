<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="mobile.css">
      <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .image-container {
            position: relative;
            width: 100%;
            height: 100vh; /* Full viewport height */
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .content-section {
            padding: 50px;
            text-align: center;
            margin: 20px;
            border-radius: 10px; /* Rounded corners for a nicer look */
        }
        .content-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .content-section p {
            font-size: 16px;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            text-align: justify;
        }
        
        /*bullet list*/
        .bullet-list {
            text-align: center; /* Center-align the bullet points */
        }

        .bullet-list ul {
            list-style: none;
            padding: 0;
            display: inline-block; /* Make the list display inline-block to center it */
            text-align: left; /* Align the text content to the left */
        }

        .bullet-list ul li {
            position: relative;
            margin-bottom: 10px;
        }

        .bullet-list ul li::before {
            content: "\2192"; /* Unicode character for right arrow */
            position: absolute;
            left: -20px;
        }

        .container {
            display: flex; /* Use flexbox to create a horizontal layout */
        }

        .left-div, .right-div {
            width: 50%; /* Both divs take up half of the container */
        }

        .left-div img {
            width: 100%; /* Make the image fill the entire div */
        }

        .bullet-list {
            list-style: none;
            padding: 0;
            text-align: center; /* Center-align the bullet list */
        }

        .bullet-list li {
            margin-bottom: 10px; /* Add some spacing between list items */
        }

        .bullet-list {
            list-style: none;
            padding: 0;
            text-align: left; /* Align the text to the left */
        }

        .bullet-list li {
            margin-bottom: 10px; /* Add spacing between list items */
            text-align: left; /* Align the text to the left */
        }

        .right-div {
            display: flex;
            justify-content: center; /* Center the content horizontally */
            align-items: center; /* Center the content vertically */
        }
        .right-div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content-box {
            background-color: #f9f9f9; /* Background color for the box */
            padding: 20px; /* Padding around the content */
            border-radius: 10px; /* Rounded corners for the box */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        .bullet-list {
            list-style: none;
            padding: 0;
        }

        .bullet-list li {
            margin-bottom: 10px;
        }
    </style>
    
    
    <style>
        /*mobile view*/
        
        .container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.left-div, .right-div {
  flex: 1;
}

/* Mobile styles */
@media (max-width: 768px) {
  .container {
    flex-direction: column;
    align-items: center;
  }

  .left-div, .right-div {
    width: 100%;
    text-align: center; /* Optional: center the text */
  }

  .left-div img {
    width: 100%;
    height: auto;
  }
}
/* about */
.about-wrapper {
  margin-left: 70px;
  position: relative;
}

.about-wrapper .content {
  background-color: #fff;
  box-shadow: 0 3px 80px rgba(173, 181, 189, 0.3), 0 0 10px rgba(173, 181, 189, 0.3) !important;
  border-radius: 0.2rem;
  padding: 30px;
  position: relative;
}

.about-wrapper .after {
  position: absolute;
  top: 10%;
  left: -60px;
  background: #FAD02C;
  box-shadow: 0 3px 80px rgba(173, 181, 189, 0.3), 0 0 10px rgba(173, 181, 189, 0.3) !important;
  width: 200px;
  height: 80%;
  color: #fff;
  border-radius: 0.2rem;
}

.about-wrapper .after h1 {
  -webkit-transform: rotate(-90deg);
      -ms-transform: rotate(-90deg);
          transform: rotate(-90deg);
  position: absolute;
  top: 43%;
  left: -45px;
  font-size: 35px;
}

@media (max-width: 767.98px) {
  .about-wrapper {
    margin-left: 0;
  }
  .about-wrapper .after {
    display: none;
  }
}
    </style>
    
    
   
    
    <style>
        @media only screen and (min-width: 600px) {
    
    body {
        font-family: "sans-serif;", Times, serif, Verdana; 
    }
}
    </style>
    
    
    <style>
    .fnt-about {
 font-family: "Times New Roman", Times, serif, Verdana;
}

</style>
    
   
</head>
<body>
    <?php include 'header.php'; ?>



    <div class="image-container fnt-about">
        <img src="assets/images/about1.jpg" alt="About Us Image">
        <div class="overlay-text">Home > About</div>
    </div>
   <section id="about" class="fnt-about">
        <!-- Container -->
        <div class="container">
            <!-- About wrapper -->
            <div class="about-wrapper">
                <div class="after"><h1>About Us</h1></div>
                <div class="content">
                    <h5 class="title mb-3" style="text-align:center;font-weight:bold; font-size:25px;">Future Optima It Solutions</h5>
                    <!-- row -->
                    <div class="row">
                        <div class="col">
                            <p style="text-align:justify; font-size:17px;" id="about_content-mob_view">Situated in the vibrant city of Kochi, Future Optima Solutions is a leading software training institute dedicated to empowering aspiring IT professionals with cutting-edge skills and knowledge. With a team of seasoned industry experts boasting over 17 years of collective experience, we offer comprehensive courses in Python, Data Science, Artificial Intelligence, Big Data Analytics, MEAN/MERN Stack, Advanced Java, and Software Testing.
 Our curriculum is meticulously crafted to meet industry standards and is delivered through a blend of theoretical instruction and hands-on practical sessions. Whether through online or offline classes, our students receive personalized guidance from expert instructors committed to nurturing their talent and fostering their growth.</p>

<br><p style="text-align:justify; font-size:17px;">At Future Optima Solutions, our mission is clear: to provide top-tier training that equips our students with the technical expertise and soft skills needed to thrive in the competitive IT landscape. We take pride in our 100% placement assistance program, ensuring that our graduates have the support they need to secure rewarding careers in leading multinational corporations.

Join us at Future Optima Solutions and embark on a transformative journey towards a prosperous career in the dynamic world of technology. With our unwavering dedication to student success and industry excellence, we are committed to helping you achieve your goals and realize your full potential.</p>

                        </div>
                         <h5 class="title mb-3" style="text-align:center;font-weight:bold; font-size:25px;"><br>Why We Are The Best ?</h5>
                        <div class="col">
                            <p style="text-align:justify; font-size:17px;">We provide comprehensive support to ensure your success, offering 100% placement assistance and affiliation with NACTET. 
                            Our flexible learning options include online and offline sessions, led by highly skilled trainers. With an affordable fee structure,
                            personalized One-On-One Mentorship, and training in personality development and language proficiency, we prepare you for the job market. 
                            Engage in mock interviews, group discussions, and receive guidance for resume preparation. Our 24*7 doubt clearance ensures continuous support, 
                            while real-world project experience and collaboration with leading IT companies enrich your learning journey</p><br><br>
                        </div>
                    </div><!-- End of Row -->                   
                   
                </div>
            </div><!-- End of About Wrapper -->         
        </div>  <!-- End of Container-->        
     </section><!--End of Section -->

     

    <?php include 'footer.php'; ?>
   
</body>

 

</html>


