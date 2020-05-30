<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title></title>
</head>
<body class="bg-light">
    <?php 
        include_once 'connect.php';
    ?>

    <header>
        <?php
            include "./components/navbar.component.php";
        ?>
    </header>
    
    <main>
        <div class="container mt-2">
            <div class="row mt-4 mb-3">
                <div class="col">
                    <form class="form-inline float-right" action="" method="GET">
                        <input class="form-control mr-sm-2" type="text" name="search" />
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">          
                    <?php
                        include './search_results.php';
                    ?>
                </div>
            </div>
        </div>
    </main>

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

