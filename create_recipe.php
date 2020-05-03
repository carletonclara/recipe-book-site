<?php
    include_once 'connect.php';

    $recipe_name = $_POST['recipe_name'];
    $author = $_POST['author'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    $sql = "INSERT INTO recipe (recipe_name, author, ingredients, instructions)
        VALUES ('$recipe_name','$author','$ingredients','$instructions');";
    mysqli_query($conn, $sql);

    header("Location: index.php?create_recipe=success");
?>