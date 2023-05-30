<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeetingS Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .rating-star {
        font-size: 24px;
        color: #ccc;
        cursor: pointer;
    }

    .rating-star:hover,
    .rating-star:hover~.rating-star {
        color: orange;
    }

    .selected-star {
        color: orange;
    }
</style>

<body>

    <?php
    require('navbar.php');
    ?>

    <div style="display: flex; justify-content: space-around; ">
        <button type="button" class="btn btn-primary text-center mt-5  "><a style="color: white;text-decoration: none;"
                href="https://meet.google.com/">Click here to Schedule a new Meeting</a></button>
        <button type="button" class="btn btn-primary text-center mt-5"><a style="color: white;text-decoration: none;"
                href="https://meet.google.com/">Click here to join Meeting</a></button>

    </div>

    <h5 class="text-center mt-4 bg-secondary p-2" style="color: whitesmoke;">Previous Session Videos</h5>
    <div style="margin-left: 20%; margin-top: 4%; margin-right: 20%;;">
        <ul class="list-group text-center">
            <li class="list-group-item ">


                <div class="info mb-3 " style="text-align: start;margin-left: 16%; font-weight: 500;font-size: 17px;">
                    Name :"Coding Fundamentals: Building the Foundation of Programming"<br>
                    Tutor Name : Learning Guru<br>
                    Date : 23/12/2022<br>



                </div>

                <video controls muted autoplay style="width:600px; height: 200px;">
                    <source src="video1.mp4" type="video/mp4">

                </video>

                <div id="rating-container">
                    <span class="rating-star" data-rating="1">&#9733;</span>
                    <span class="rating-star" data-rating="2">&#9733;</span>
                    <span class="rating-star" data-rating="3">&#9733;</span>
                    <span class="rating-star" data-rating="4">&#9733;</span>
                    <span class="rating-star" data-rating="5">&#9733;</span>
                </div>
                <p id="selected-rating"></p>




            </li>
            <li class="list-group-item">
                <div class="info mb-3 " style="text-align: start;margin-left: 16%; font-weight: 500;font-size: 17px;">
                    Name :"English Grammar Essentials: Mastering Language Skills" <br>
                    Tutor Name :Academic Mentor<br>
                    Date : 11/10/2022<br>



                </div>

                <video controls muted autoplay style="width:600px; height: 200px;">
                    <source src="" type="video/mp4">

                </video>
                <div id="rating-container">
                    <span class="rating-star" data-rating="1">&#9733;</span>
                    <span class="rating-star" data-rating="2">&#9733;</span>
                    <span class="rating-star" data-rating="3">&#9733;</span>
                    <span class="rating-star" data-rating="4">&#9733;</span>
                    <span class="rating-star" data-rating="5">&#9733;</span>
                    <p id="selected-rating"></p>
                </div>
            </li>
            <li class="list-group-item">
                <div class="info mb-3 " style="text-align: start;margin-left: 16%; font-weight: 500;font-size: 17px;">
                    Name :"History Unraveled: Understanding the Past for a Better Future" <br>
                    Tutor Name :Knowledge Navigator<br>
                    Date : 27/05/2023<br>



                </div>

                <video controls muted autoplay style="width:600px; height: 200px;">
                    <source src="" type="video/mp4">

                </video>
                <div id="rating-container">
                    <span class="rating-star" data-rating="1">&#9733;</span>
                    <span class="rating-star" data-rating="2">&#9733;</span>
                    <span class="rating-star" data-rating="3">&#9733;</span>
                    <span class="rating-star" data-rating="4">&#9733;</span>
                    <span class="rating-star" data-rating="5">&#9733;</span>
                </div>
                <div class="container bg-secondary">
                    <span id="rateMe2" class="empty-stars"></span>
                </div>


            </li>
            <li class="list-group-item">
                <div class="info mb-3 " style="text-align: start;margin-left: 16%; font-weight: 500;font-size: 17px;">
                    Name :"Mathematics Mastery: A Comprehensive Approach" <br>
                    Tutor Name :Study Coach<br>
                    Date : 23/12/2021<br>



                </div>

                <video controls muted autoplay style="width:600px; height: 200px;">
                    <source src="" type="video/mp4">

                </video>
                <div id="rating-container">
                    <span class="rating-star" data-rating="1">&#9733;</span>
                    <span class="rating-star" data-rating="2">&#9733;</span>
                    <span class="rating-star" data-rating="3">&#9733;</span>
                    <span class="rating-star" data-rating="4">&#9733;</span>
                    <span class="rating-star" data-rating="5">&#9733;</span>
                </div>
            </li>
            <li class="list-group-item">
                <div class="info mb-3 " style="text-align: start;margin-left: 16%; font-weight: 500;font-size: 17px;">
                    Name : Science Explorers: Unveiling the Wonders of the Natural World <br>
                    Tutor Name :Educator Insights<br>

                    Date : 09/09/2021<br>



                </div>

                <video controls muted autoplay style="width:600px; height: 200px;">
                    <source src="" type="video/mp4">

                </video>
                <div id="rating-container">
                    <span class="rating-star" data-rating="1">&#9733;</span>
                    <span class="rating-star" data-rating="2">&#9733;</span>
                    <span class="rating-star" data-rating="3">&#9733;</span>
                    <span class="rating-star" data-rating="4">&#9733;</span>
                    <span class="rating-star" data-rating="5">&#9733;</span>
                </div>
            </li>
        </ul>

    </div>









    <script>
        // Get the rating container and stars
        const ratingContainer = document.getElementById('rating-container');
        const ratingStars = ratingContainer.getElementsByClassName('rating-star');

        // Variable to store the selected rating
        let selectedRating = 0;

        // Add event listeners to each star
        Array.from(ratingStars).forEach((star) => {
            star.addEventListener('click', () => {
                selectedRating = star.getAttribute('data-rating');
                displayRating();
            });
            star.addEventListener('mouseover', () => {
                highlightStars(star.getAttribute('data-rating'));
            });
            star.addEventListener('mouseout', () => {
                highlightStars(selectedRating);
            });
        });

        // Display the selected rating
        function displayRating() {
            const selectedRatingElement = document.getElementById('selected-rating');
            selectedRatingElement.textContent = `You selected: ${selectedRating} star(s)`;
        }

        // Highlight stars up to the selected rating
        function highlightStars(rating) {
            Array.from(ratingStars).forEach((star) => {
                const starRating = star.getAttribute('data-rating');
                if (starRating <= rating) {
                    star.classList.add('selected-star');
                } else {
                    star.classList.remove('selected-star');
                }
            });
        }

    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>