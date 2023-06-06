<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/dahsboard.css">
    <title>CRUD News</title>
    <style>
        body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3 class="text-center fw-bold ">Insert News Update</h3>
    <div class="row justify-content-center">
        <div class="col-md-6">
        <form method="post" action="/news/push">
            <div class="mb-3">
            <label for="inputText" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="inputText">
            </div>
            <div class="mb-3">
            <label for="textarea" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="textarea" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </form>
        </div>
    </div>
    </div>


    <!-- cdn loader -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/typeit@8.0.7/dist/index.umd.js"></script>
    <script src="public/js/dashboard.js"></script>
</body>
</html>

