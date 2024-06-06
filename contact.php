<!DOCTYPE html>
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
        
.container {
    display: flex;
    flex-direction: row;
    height: 210px;
    padding: 20px;
    box-sizing: border-box;
}


.content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 8px;
    margin: 10px;
    height: 100%;
}

.content-left {
    background-color: #e8f0ff;
}

.content-right {
    background-color: #d1e7ff;
    padding: 0; /* Remove padding to make iframe full height */
}

.content-right iframe {
    width: 100%;
    height: 100%;
    border-radius: 8px;
}

/* Responsive design */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
        height: auto;
    }

    .content {
        margin: 10px 0;
        height: auto;
    }

    .content-right iframe {
        height: 500px; /* Adjust iframe height for mobile view */
    }
}
.red-location-icon {
    color: red;
    /* Additional styling properties if needed */
}
    </style>
   <style>
   

   
    .content-left {
        text-align: center;
    }

    .content-right {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content-right iframe {
        width: 100%;
        height: 100%;
    }

    .container-2 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        flex-direction: column;
    }

    .form-container {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
        max-width: 400px; /* Adjust the max-width of the form */
    }

    .form-container h2 {
        margin-bottom: 20px;
    }

    .form-container input,
    .form-container textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: none;
    }

    .form-container button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-container button:hover {
        background-color: #0056b3;
    }

    @media only screen and (max-width: 600px) {
        .container {
            flex-direction: column;
            align-items: center;
        }

        .content {
            width: 100%;
            margin-bottom: 20px;
        }

        .content-right iframe {
            height: 200px; /* Adjust iframe height for mobile view */
        }
    }
</style>
<style>
    /* Hide content-left div on mobile devices */
    @media only screen and (max-width: 600px) {
        #location-info {
            display: none;
        }
    }
</style>




    </head>
    <body>
        <?php include 'header.php';?>
        
        
        
        
          <div class="container" style="height: 400px;">
     <div class="content content-left" id="location-info">
    <h2><i class="red-location-icon fa fa-map-marker"></i></h2>
    <p style="font-size:17px;">Civil Line Rd, Chembumukku, <br>Ernakulam, Kochi, <br>Kerala 682021</p>
</div>
        <div class="content content-right">
           
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.0620684277137!2d76.322569!3d10.011732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d9801b1fb1b%3A0x795968b38eae6734!2sFuture%20Optima%20IT%20Solutions%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1717222021596!5m2!1sen!2sin"
           width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
        
        
        
        
<div class="container-2" style="background-image: url('assets/images/contact-bg.jpg'); background-color: #f2f2f2; background-size: cover; background-position: center;">
    <div class="form-container details-container" style="margin-left: 10%; margin-right: 10%;">
        <h2>Contact Form</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
        
        
        
        
        
          <?php include 'footer.php';?>
    </body>
    </html>