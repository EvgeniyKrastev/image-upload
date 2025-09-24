<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Images</title>
</head>
<body>
    <div class="container mt-5">
        <?php
        include_once("connect.php");
        $query = "SELECT * FROM images";
        $result = mysqli_query($conn,$query);
        echo "<a href='create.php' class='btn btn-info mb-5'>Add New</a>";
        if($result->num_rows>0){
            while($row = mysqli_fetch_array($result)){
                $name = $row["name"];
                $fileName = $row["filename"];
                $imageUrl = "uploads/".$fileName;
                echo "<div class='profile mt-4'>"; 
                echo "<img src='$imageUrl'>"; 
                echo "<h3>$name</h3>"; 
                echo "</div>"; 
            }
        }
        ?>
    </div>
</body>
</html>