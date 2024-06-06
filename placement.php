<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="mobile.css">
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
      
}

    </style>
    <style>
    
    .placement-heading {
  font-size: 34px;
  font-weight: bold;
  margin-bottom: 10px; /* Add some spacing between heading and content */
  color: #333; /* Set text color */
  text-align:center;
}
    
    .placement-container {
  display: flex;
  margin-bottom: 20px; /* Add some spacing between placement containers */
  background-color: #fff; /* Set background color to white */
  border-radius: 8px; /* Add rounded corners */
  overflow: hidden; /* Hide overflow content */
}

.image {
  flex-shrink: 0; /* Prevent image from shrinking */
}

.image img {
  width: 100%;
  height: 350px;
  border-top-left-radius: 8px; /* Add rounded corners to the top-left and top-right */
  border-bottom-left-radius: 8px;
}

.placement-content {
  flex-grow: 1;
  padding: 20px; /* Add padding to the content */
}

.placement-content p {
  margin: 0; /* Remove default margin */
  font-size: 16px;
  line-height: 1.6;
  color: #333; /* Set text color */
}

/* For smaller screens, adjust layout */
@media screen and (max-width: 768px) {
    .placement-container {
        flex-direction: column; /* Stack items vertically */
    }
    .placement-content {
        order: 1; /* Change order to appear below image */
    }
    .image {
        order: 2; /* Change order to appear above content */
    }
}
.placement-numbers {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 50px;
}

.placement-number {
    text-align: center;
}

.text {
    font-size: 16px;
    color: #666;
}

.number-circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: fadeInUp 2s forwards;
    opacity: 0;
}

.number {
    font-size: 36px;
    font-weight: bold;
    color: #fff;
    animation: increaseNumber 2s forwards;
    opacity: 0;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes increaseNumber {
    from {
        opacity: 0;
        transform: scale(0.5);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.placement-number:nth-child(1) .number-circle {
    animation-delay: 0.5s; /* Delay the animation for the first circle */
}

.placement-number:nth-child(2) .number-circle {
    animation-delay: 1s; /* Delay the animation for the second circle */
}

.placement-number:nth-child(3) .number-circle {
    animation-delay: 1.5s; /* Delay the animation for the third circle */
}


/* Media query for smaller screens */
@media screen and (max-width: 768px) {
    .placement-number {
        flex-direction: column; /* Stack items vertically on smaller screens */
    }

    .text {
        font-size: 18px; /* Reduce font size for smaller screens */
    }

    .number-circle {
        width: 80px; /* Adjust circle size for smaller screens */
        height: 80px;
    }

    .number {
        font-size: 18px; /* Reduce font size for smaller screens */
    }
}







 /* Media query to hide the Success Stories section on mobile */
        @media (max-width: 600px) {
            #success-stories {
                display: none;
            }
            #mob-place-img{
                height:250px;
                margin-left:30px;
                margin-right:30px;
               
            }
            .placement-content{
                margin-left:20px;
                margin-right:20px;
            }
            #mob-stud-circle{
                margin-left:50px;
            }
        }





</style>


    <style>
        .promo-section {
            background: url('assets/images/black.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            height:500px;
            text-align: center;
            padding: 50px 20px;
        }
        .promo-section h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .promo-section p {
            font-size: 1.2em;
            margin-bottom: 40px;
        }
        .promo-section .contact-info {
            font-size: 1em;
            margin-bottom: 40px;
        }
        .promo-section .join-button {
            background-color: #ff6600;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
        }
    </style>
    
     <style>
    .fnt-place {
 font-family: "Times New Roman", Times, serif, Verdana;
}
</style>
    
    
    
    
<script>document.addEventListener("DOMContentLoaded", function() {
    var placements = document.getElementById("placements");
    var students = document.getElementById("students");
    var tutors = document.getElementById("tutors");

    var placementCount = 0;
    var studentCount = 0;
    var tutorCount = 0;

    setInterval(function() {
        placementCount += Math.floor(Math.random() * 5) + 1; // Increase by a random number between 1 and 5
        studentCount += Math.floor(Math.random() * 3) + 1; // Increase by a random number between 1 and 3
        tutorCount += Math.floor(Math.random() * 2) + 1; // Increase by a random number between 1 and 2

        placements.innerText = placementCount;
        students.innerText = studentCount;
        tutors.innerText = tutorCount;
    }, 1000); // Adjust speed of animation (lower values are faster)
});</script>
    </head>
    
    
    <body>
         <?php include 'header.php'; ?>



     
    <div class="image-container fnt-place">
        <img src="assets/images/place.jpg" alt="About Us Image">
        <div class="overlay-text" style=" word-wrap: break-word;">Home > Placements<br></div>
    </div>
        <br><br>
       
     <div class="placement-container fnt-place">
  <div class="image" id="mob-place-img">
    <img src="assets/images/place-img2.jpg" style=" border-radius:10px;" alt="Your Image">
  </div>
  <div class="placement-content fnt-place">
        <h2 class="placement-heading">Placement Assistance</h2>
      <p class="placement-paragraph" style="text-align:justify; font-size:18px;">Future Optima IT Solutions is steadfast in its mission to furnish every student with comprehensive support, 
      ensuring 100% placement assistance. Through the diligent guidance of our seasoned IT professionals, students receive mentorship throughout 
      their entire journey within our institution. Our strategic partnerships with leading IT companies further bolster our commitment to achieving this goal. 
      These collaborations not only enhance our students' prospects but also reinforce our dedication to providing top-notch placement services. 
      By leveraging our extensive network and expertise, we empower students to seize lucrative opportunities in the IT sector. 
      At Future Optima, we pride ourselves on fostering a nurturing environment where students can flourish and realize their career aspirations seamlessly.</p>
    <!-- Add more content as needed -->
  </div>
</div>
<div class="placement-numbers fnt-place">
    <div class="placement-number">
        <p class="text " style=" font-size:24px;">Placements</p><br>
        <div class="number-circle">
            <div class="number" id="placements">0</div>
        </div>
    </div>
    <div class="placement-number">
        <p class="text" style=" font-size:24px;">Happy Students</p><br>
        <div class="number-circle" id="mob-stud-circle">
            <div class="number" id="students">0</div>
        </div>
    </div>
   <div class="placement-number" id="success-stories">
        <p class="text" style=" font-size:24px;">Success Stories</p><br>
        <div class="number-circle">
            <div class="number" id="tutors">0</div>
        </div>
    </div>
</div>
<br><br>
 <div class="promo-section fnt-place">
        <p style="margin-top:90px; font-weight:bold; font-size:23px; color:white;">Don't delay! Start a high-quality course with<br> Future Optima IT Solutions<br> and learn from leading experts now!</p>
        <!--<p class="contact-info">If You Have Any Questions Call Us / Whatsapp On +91 80866 51651</p>-->
        <a href="contact-new.php" class="join-button">Join Now</a>
    </div>



<script src="script.js"></script>
       
        <?php include 'footer.php';?>
    </body>
    
    </html>