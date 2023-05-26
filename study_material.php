<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subject page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <?php
    require('navbar.php');
    ?>
    <div style="background-color: antiquewhite; height: 55px;width: 100%;">


        <h3 class="text-center mt-3 bg-secondary p-2" style="color:red;box-shadow:3px 4px 5px black;">Available study
            material</h3>

    </div>

    <form action="">
        <div class="sorting " style="float: right; margin-right: 3%;">
            <label for="cars">Sort by:</label>
            <select name="cars" id="cars" style="width: 130px;height: 38px; margin-top: 4%;">
                <option hidden value="volvo">Select Subject </option>
                <option value="volvo">IOT </option>
                <option value="saab">ML</option>
                <option value="opel">Cloud</option>
                <option value="opel">java</option>
            </select>

            <select name="cars" id="cars" style="width: 130px;height: 38px; margin-top: 4%;">
                <option hidden value="volvo">Choose Type</option>
                <option value="volvo">PDF</option>
                <option value="saab">Video</option>
                <option value="opel">Presentation</option>
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </form>

    <div>

        <button type="button" class="btn btn-primary" style=" margin-top:1%; margin-left:4%; width:20%;"><a
                style="font-size:19px;font-weight:700;color:white; text-decoration: none;" href="study_form.php">Add
                Your
                Files</a></button>

        <button type="button" class="btn btn-primary" style=" margin-top:1%; margin-left:14%; width:20%;"><a
                style="font-size:19px;font-weight:700;color:white; text-decoration: none;" href="schedule_meet.php">All
                Video Files</a></button>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>


</html>