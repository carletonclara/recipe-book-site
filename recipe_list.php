<?php
    include_once 'connect.php';

    $sql = "SELECT * FROM recipe;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)){
            include './components/recipe_list_item.component.php';
        }
    }

    
?>