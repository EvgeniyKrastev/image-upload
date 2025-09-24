<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Upload image</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input class="form-control mt-4" type="text" name="fullname" id="" placeholder="Enter Name:">
            <input class="form-control mt-4" type="file" name="image" id="">
            <input class="btn btn-primary mt-4"type="submit" value="Upload" name="submit">
        </form>
    </div>
</body>
</html>