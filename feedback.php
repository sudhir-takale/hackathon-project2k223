<!DOCTYPE html>
<html>

<head>

  <title>Feedback Form</title>



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

  <?php
  require('navbar.php');
  ?>
  <div style="background-color: antiquewhite; height: 55px;width: 100%;">
    <h3 class="text-center mt-3 bg-secondary p-2" style="color:red;box-shadow:3px 4px 5px black;">Feedback Form</h3>
  </div>


  <div class="main" style="display:flex;">



    <div class="mt-5">


      <img class="mt-5" style="width:55%; margin-left:95px; margin-top:55px" src="images/feedback.jpg" alt="">
    </div>







    <div class=" mt-5 " style="width: 350%; margin-right:40px;">
      <!-- <h1 class="text-center bg-secondary p-2" style="color:white; border-radius:9px;">Feedback Form</h1> -->
      <div class="col-md-11">
        <form class="border p-4" action="feedback.php" method="POST">
          <div class="form-group">
            <label for="name" style="font-weight:700; font-size:16px;">Enter Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email" style="font-weight:700; font-size:16px;">Rate the Session</label>
            <input type="number" class="form-control" min="1" max="5" name="rating"
              placeholder="Rate session from 1 to 5" required>
          </div>
          <div class="form-group">
            <label for="email" style="font-weight:700; font-size:16px;">Enter Toturial Name..</label>
            <input type="email" class="form-control" name="tutname"
              placeholder="Enter Tutorial no for which you want give feedback." required>
          </div>

          <div class="form-group">
            <label for="message" style="font-weight:700; font-size:16px;">Give Suggestion if any </label>
            <textarea class="form-control" name="comment" placeholder="Enter your message" rows="3"></textarea>
          </div class="submit">
          <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary w-50">Submit</button>
          </div>
        </form>
      </div>
    </div>





  </div>



</body>

</html>