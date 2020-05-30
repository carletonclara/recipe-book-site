<?php
    include 'search.php'; 

    if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)){
            include './components/recipe_list_item.component.php';
        }
    } else {
        include 'recipe_list.php';
    }

?>