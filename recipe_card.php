<?php
if(isset($_GET['id'])){
    require_once './connect.php';
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM recipe WHERE id='$id'";
    $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
    $row = mysqli_fetch_array($result);
} else {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php
        include "./components/navbar.component.php";
    ?>

    <div class="container mt-2">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-3">
                        <h1><?php echo $row['recipe_name'] ?></h1>
                        <h2>by <?php echo $row['author'] ?></h2>
                    </div>
                    <div class="col-9"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <h3>Ingredients</h3>
                        <p><?php echo $row['ingredients'] ?></p>
                    </div>
                    <div class="col-9">
                        <h3>Instructions</h3>
                        <p><?php echo $row['instructions'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    


</body>
</html>