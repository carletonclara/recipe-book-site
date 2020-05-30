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
        include_once 'connect.php';
    ?>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-3">
                <a class="btn btn-dark" href="./create_recipe_page.php" role="button">
                    New Recipe 
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <div class="col-9">
                <form class="form-inline" action="" method="GET">
                    <input class="form-control mr-sm-2" type="text" name="search" />
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </form>           
                <?php
                    include './search_results.php';
                ?>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/248d496a38.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="js/favorite_toggle.js"></script>
</body>
</html>
