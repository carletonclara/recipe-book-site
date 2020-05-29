<?php
        

    include_once 'connect.php';

    $sql = "SELECT * FROM recipe;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <div class='card'>
                <div class='card-body'>
                    <div class='row'>
                        <div class='col-3'>
                            <a href='recipe_card.php?id={$row['id']}'>{$row['recipe_name']}</a>
                        </div>
                        <div class='col-3'>
                            by {$row['author']}
                        </div>
                        <div class='col-3'>
                            <a href='recipe_card.php?id={$row['id']}'>Edit</a>
                        </div>
                        <div class='col-3'>
                            <i class='far fa-star'></i>
                        </div>
                    </div>           
                </div>
            </div>
            ";
        }
    }

    
?>