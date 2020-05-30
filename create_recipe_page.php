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
<body>
    <header>
        <?php
            include "./components/navbar.component.php"; 
        ?>
    </header>

    <main>
        <div class="container mt-2">
            <div class="row">
                <div class="col">
                    <h2>Create a Recipe</h2>
                    <div class="card bg-light m-2">
                    <div class="card-body">
                        <form action="create_recipe.php" method="POST">
                            <div class="form-row mb-2">
                                <div class="col-6">
                                    <label for="recipe_name">Recipe Name</label>
                                    <input type="text" class="form-control" name="recipe_name" placeholder="Recipe Name" required>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="recipe_photo">Recipe Photo</label>
                                        <input type="file" class="form-control-file" id="recipe_photo">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col-6">
                                    <label for="author">Author</label>
                                    <input type="text" class="form-control" name="author" placeholder="Author" required>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-5">
                                    <label for="recipe_book">Recipe Book</label>
                                    <select class="form-control" id="recipe_book" name="recipe_book">
                                        <option>Default select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="ingredients">Ingredients</label>
                                        <textarea class="form-control" id="ingredients" name="ingredients" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group">
                                        <label for="instructions">Instructions</label>
                                        <input type="text" class="form-control" id="instructions" name="instructions"></input>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark float-right" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
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
    <!-- Personal Scripts --> 
    <script src="js/create_recipe_page.js"></script>
</body>
</html>