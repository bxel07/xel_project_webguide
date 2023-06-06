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
</head>
<body>

    <?php 
    // <!-- section hero  -->
        require $_SERVER['DOCUMENT_ROOT'].'/devise/Display/componen/newspanel/sidebar.php';
      
    ?>
    
    <div class="col py-3"> 
        <div class="container">
        <div id="content-news" class="content">
            <h1 class="text-center">Crud News</h1>
           <button class="btn btn-success my-3 "><a href="/news/insert" class="text-decoration-none text-white">Tambah</a></button>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
            <?php foreach ($model as $key => $contact) : ?>
            <tr>
                <td><?= ++$key ?></td>
                <td><?= $contact['title'] ?></td>
                <td><?= $contact['content'] ?></td>
                <td>
                    <button class="btn btn-warning my-3 "><a href="/news/update?id=<?= $contact['id'];?>" class="text-decoration-none text-white">Update</a></button>
                    <button class="btn btn-danger my-3 "><a href="/news/delete?id=<?= $contact['id'];?>" class="text-decoration-none text-white">Delete</a></button>                
                </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
            </table>
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