<?php
    include_once 'connect.php';

    $recipe_name = $_POST['recipe_name'];
    $author = $_POST['author'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    $sql = "INSERT INTO recipe (recipe_name, author, ingredients, instructions)
        VALUES ('$recipe_name','$author','$ingredients','$instructions');";

    #Get the id of the inserted recipe to get view
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: recipe_card.php?id={$last_id}");
?>