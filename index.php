<?php

require('database.php');
session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Home | Welcome to Knowledge Point </title>
</head>

<body>




    <nav>
        <div class="logo">
            <a href="index.html">Knowledge Point</a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="study_material.php">Study Material</a></li>



            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>



            <li><a href="logout.php">Log Out</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>



    <header>
        <div class="container1">
            <img src="images/home images.jpg" alt="Background Image">
            <div class="overlay">
                <h1>
                    <?php
                    echo "welcome <span  > " . $_SESSION['username'] . " </span>  to Knowledge Point;";


                    ?>
                </h1>
                <button class="get-started"><a href="#mainsection">Get Started</a></button>
            </div>
        </div>




    </header>



    <section id="mainsection">
        <hr>

        <div class="about-section container">

            <h2 class="text-center mt-5 bg-secondary " style="color: white;padding: 1%;">About us </h2>
            <p class="mt-3" style="font-size: 16px;font-weight:600;font-family:Arial, Helvetica, sans-serif">A
                peer-to-peer online study material exchange website is a platform where students can share and exchange
                educational resources with one another. These websites facilitate the sharing of study materials such as
                lecture notes, textbooks, practice exams, and other relevant educational content. </br>

                To maintain the quality and legality of shared materials, these websites often have moderation systems
                in place. Users may report inappropriate or copyrighted content, and moderators review and remove such
                materials as necessary.
                Users can search and browse through the available resources based on subjects or keywords of interest.
                They can download the materials they find useful and may have the option to rate and provide feedback on
                the shared content. Some platforms also offer communication features like forums or messaging to
                encourage collaboration and community building. Moderation systems are typically in place to ensure the
                quality and legality of the shared materials.</br> It's important for users to be mindful of copyright
                regulations when uploading and downloading content. Overall, peer-to-peer online study material exchange
                websites provide a convenient and collaborative environment for students to access and share educational
                resources.

            </p>



        </div>


    </section>




    <section class=" p-2">
        <hr>
        <div class="d-flex justify-content-between mt-5" style="margin-left: 3%; margin-right:9%; ">

            <div class="upcoming-event">
                <div class="container event">
                    <h3 class="m-lg-5 bg-secondary p-3" style="color:white; border-radius: 6px;">Upcoming Events</h3>

                    <ul class="list-group align-content-center">
                        <li class="list-group-item event-info">
                            <div class="container">
                                <div class="info">

                                    <h6>Lecture on the topic 1</h6>


                                    Date : <span>27/05/2023</span>
                                    Time :<span> 10:00 AM</span> </br>
                                    link :<span> https://</span>

                                    </p>
                                </div>

                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="info">

                                    <h6>Lecture on the topic 1</h6>


                                    Date : <span>27/05/2023</span>
                                    Time :<span> 10:00 AM</span> </br>
                                    link :<span> https://</span>
                                    </p>
                                </div>

                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="info">

                                    <h6>Lecture on the topic 1</h6>


                                    Date : <span>27/05/2023</span>
                                    Time :<span> 10:00 AM</span> </br>
                                    link :<span> https://</span>
                                    </p>
                                </div>

                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="info">

                                    <h6>Lecture on the topic 1</h6>


                                    Date : <span>27/05/2023</span>
                                    Time :<span> 10:00 AM</span> </br>
                                    link :<span> https://</span>
                                    </p>
                                </div>

                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="info">

                                    <h6>Lecture on the topic 1</h6>


                                    Date : <span>27/05/2023</span>
                                    Time :<span> 10:00 AM</span> </br>
                                    link :<span> https://</span>
                                    </p>
                                </div>

                            </div>
                        </li>


                    </ul>
                </div>

            </div>

            <div class="recent-update" style="margin-top: 8%;">
                <img src="https://img.freepik.com/free-vector/female-student-listening-webinar-online_74855-6461.jpg"
                    alt="">


            </div>


        </div>





    </section>

    <hr>


    <!-- <section> -->

    <!-- This is a Questions sessions -->
    <!-- <div class="container w-50 p-4" style="border:2px solid black;">
            <h4 class="text-center">Ask A questions </h4>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter Question</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ask a question">
                </div>


        </div>
        -->

    <!-- </section> -->

    <section class=" mt-4 p-2">



        <div class="container w-75">
            <h2 class="text-center bg-secondary p-2" style="color:whitesmoke;">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">

                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How do I create an Account?
                        </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Visit our website and click on the "Sign Up" or "Create Account" button. You will usually
                            find this option in the top right corner of the website.

                            You will be redirected to the registration page. Fill out the required information, such as
                            your name, email address, and password. Make sure to choose a strong password that includes
                            a combination of letters, numbers, and special characters.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How can I reset my password?
                        </button>
                    </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            If you have forgotten your password or need to reset it for any reason, you can follow these
                            steps to reset your password:

                            Go to the login page of our website.

                            Look for the "Forgot Password" or "Reset Password" link, usually located near the login
                            form. Click on that link.

                            You will be redirected to the password reset page. Enter the email address associated with
                            your account.

                            Click on the "Reset Password" or "Send Reset Link" button.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What is your customer support number?
                        </button>
                    </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our customer support team is here to assist you. Please reach out to us using the following
                            contact details:

                            Customer Support Number: [Insert Customer Support Number]

                            Our dedicated support team is available [Specify the hours of availability, such as "24/7"
                            or specific business hours].
                            Feel free to contact us with any questions, concerns, or inquiries you may have.
                            We are here to provide you with prompt and reliable assistance.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How can I provide feedback or report a problem?
                        </button>
                    </h3>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We appreciate your feedback and are committed to resolving any issues you may encounter. To
                            provide feedback or report a problem,
                            you can use one of the following methods:

                            Feedback Form: Visit our website and navigate to the "Contact Us" or "Feedback" page.
                            Fill out the feedback form with your name, email address, and a detailed description of your
                            feedback or the problem you encountered.
                            Click on the "Submit" or "Send" button to send us your feedback.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            What is your privacy policy?
                        </button>
                    </h3>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Protecting your privacy is important to us. We have implemented a privacy policy to outline
                            how we collect, use, and protect your personal information.
                            Here is an overview of our privacy policy:

                            Information Collection: We may collect certain personal information from you when you
                            interact with our website or services.
                            This may include your name, email address, contact details, and other relevant information
                            necessary to provide our services.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Are my personal detais are secured?
                        </button>
                    </h3>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, protecting the security of your personal information is of utmost importance to us.
                            We have implemented various security measures to safeguard your personal details and ensure
                            their confidentiality.
                        </div>
                    </div>
                </div>
            </div>



        </div>




    </section>











    <footer class="footer bg-secondary p-2 ">
        <div class="container2" style="height:125px">
            <div class="footer-content">

                <div class="footer-section contact">
                    <h2 style="margin-left:62px;font-weight:700;">Contact Us</h2>
                    <p style="color:whitesmoke; font-size:16px;font-weight:600;">Email: info@Knowledgepoint.com</p>
                    <p style="color:whitesmoke; font-size:16px;font-weight:600;">Phone: +1234567890</p>
                </div>
                <div class="footer-section social ">
                    <h2 style="margin-left:62px;font-weight:700;">Follow Us</h2>
                    <div class="social-icons ">
                        <img style="margin-right:12px" src="images/facebook.png" alt="">
                        <img src="images/Twitter.png" style="margin-right:12px" alt="">
                        <img src="images/instagram.png" style="margin-right:12px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
















    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



</body>

</html>