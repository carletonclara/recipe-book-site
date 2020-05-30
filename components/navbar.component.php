<?php
    echo'
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <a class="navbar-brand" href="/recipe-book">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="recipes_page.php">Recipes</a>
                        <a class="nav-item nav-link" href="calendar_page.php">Meal Plan</a>
                    </div>
                </div>
                <a class="btn btn-outline-light align-right" href="./create_recipe_page.php" role="button">
                        New Recipe 
                        <i class="fas fa-plus"></i>
                    </a>
            </nav> 
        ';
    
?>