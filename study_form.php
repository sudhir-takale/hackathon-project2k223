<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>File Upload</title>
    <style>
        .main {
            display: flex;
            justify-content: space-between;
            margin-right: 149px;
            margin-top: 155px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="container" style="width: 650px; height: 400px; margin-top: 35px;       border: 2px solid #ccc;">
            <h3 style="margin-top: 55px; text-align: center;">Upload Your File</h3>
            <form enctype="multipart/form-data" action="study_form.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Type subject</label>
                    <input type="text" class="form-control" name="filename" id="exampleInputEmail1"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">choose file</label>
                    <input type="file" name="inputfile" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary" style="margin-left: 45%;
                        margin-bottom: 50px;">Submit</button>
            </form>
        </div>
        <div>
            <img src="https://img.freepik.com/premium-vector/data-hosting_203633-660.jpg?w=2000" style="width: 400px;">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>