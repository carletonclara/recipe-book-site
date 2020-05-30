<?php
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
                    <div onclick='toggleFavorite()'>
                        <i class='far fa-star' id='star{$row['id']}'></i>
                    </div>
                </div>
            </div>           
        </div>
    </div>
    ";

    
?>