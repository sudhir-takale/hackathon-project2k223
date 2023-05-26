<?php


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
    <title>Home | Welcome to Knowledge Point </title>
</head>

<body>

    <?php
    echo "welcome " . $_SESSION['username'] . " to Knowledge Point;";


    ?>


    <nav>
        <div class="logo">
            <a href="index.html">Knowledge Point</a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href=study_material.php">Study Material</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
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
                <h1>Welcome to Knowledge Point</h1>
                <button class="get-started"><a href="#mainsection">Get Started</a></button>
            </div>
        </div>




    </header>



    <section id="mainsection">
        <hr>

        <div class="about-section container">

            <h2 class="text-center mt-5 bg-secondary " style="color: white;padding: 1%;">Who we are !</h2>
            <p class="mt-3" style="font-size: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Lorem
                ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, laborum saepe iure
                delectus sequi
                laboriosam aperiam beatae deserunt alias voluptatum expedita perferendis autem asperiores veritatis in
                ipsam, voluptas quaerat nulla. Perspiciatis enim excepturi iste ratione. Cupiditate minus debitis
                inventore fugiat ratione eius quisquam, tempora ullam Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Voluptates ratione obcaecati, in vitae voluptatibus corrupti, enim quasi error nostrum amet,Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatum iusto aliquid recusandae quaerat
                commodi excepturi quam ipsum ut, aut aspernatur cupiditate inventore.
                reiciendis excepturi velit! Dolor voluptatibus eum pariatur praesentium aliquam officiis eveniet unde
                perferendis sequi?.</p>



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
                                    Time :<span> 10:00 AM</span>

                                    </p>
                                </div>

                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="info">

                                    <h6>Lecture on the topic 1</h6>


                                    Date : <span>27/05/2023</span>
                                    Time :<span> 10:00 AM</span>

                                    </p>
                                </div>

                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="info">

                                    <h6>Lecture on the topic 1</h6>


                                    Date : <span>27/05/2023</span>
                                    Time :<span> 10:00 AM</span>

                                    </p>
                                </div>

                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="info">

                                    <h6>Lecture on the topic 1</h6>


                                    Date : <span>27/05/2023</span>
                                    Time :<span> 10:00 AM</span>

                                    </p>
                                </div>

                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="info">

                                    <h6>Lecture on the topic 1</h6>


                                    Date : <span>27/05/2023</span>
                                    Time :<span> 10:00 AM</span>
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
                            Visit the website or application: Access the website or application where you want to create
                            an account.

                            Locate the registration or sign-up page: Find the registration or sign-up page on thesd


                            Choose a username: Select a unique username that will represent your account.

                            Enter your email address: Provide a valid email address that you have access to

                            Set a password: Choose a strong and secure password to protect your account.
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
                            Visit the Password Reset Page: Go to the website or application where you want to reset your
                            password.

                            Locate the Password Reset Functionality and Enter your Email Address: Find the password
                            reset page and enter the email address associated with your account.
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
                            Answer to Question 3
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
                            Answer to Question 4
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
                            Answer to Question 2
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
                            Answer to Question 2
                        </div>
                    </div>
                </div>
            </div>



        </div>




    </section>











    <footer class="footer">
        <div class="container2">
            <div class="footer-content">

                <div class="footer-section contact">
                    <h2>Contact Us</h2>
                    <p>Email: info@Knowledgepoint.com</p>
                    <p>Phone: +1234567890</p>
                </div>
                <div class="footer-section social">
                    <h2>Follow Us</h2>
                    <div class="social-icons ">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="images/icons8-twitter.svg"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
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