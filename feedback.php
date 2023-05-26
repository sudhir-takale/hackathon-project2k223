



<!DOCTYPE html>
<html>

<head>

  <title>Feedback Form</title>



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5 w-50">
    <h1 class="text-center bg-secondary p-2" style="color:white; border-radius:9px;">Feedback Form</h1>
    <div class="col-md-11">
      <form class="border p-4" action="feedback.php" method="POST">
        <div class="form-group">
          <label for="name" style="font-weight:700; font-size:16px;">Enter Your Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="email" style="font-weight:700; font-size:16px;">Rate the Session</label>
          <input type="number" class="form-control" min="1" max="5" name="rating" placeholder="Rate session from 1 to 5"
            required>
        </div>
        <div class="form-group">
          <label for="email" style="font-weight:700; font-size:16px;">Enter Toturial Name..</label>
          <input type="email" class="form-control" name="tutname"
            placeholder="Enter Tutorial no for which you want give feedback." required>
        </div>

        <div class="form-group">
          <label for="message" style="font-weight:700; font-size:16px;">Give Suggestion if any </label>
          <textarea class="form-control" name="comment" placeholder="Enter your message" rows="5"></textarea>
        </div class="submit">
        <div class="d-flex justify-content-center mt-3">
          <button type="submit" class="btn btn-primary w-50">Submit</button>
        </div>
      </form>
    </div>
  </div>


</body>

</html>