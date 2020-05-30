<?php
    include_once 'connect.php';
    $search = $_POST['search'];

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "SELECT * FROM recipe WHERE recipe_name LIKE '%{$search}%' OR author LIKE '%{$search}%';";
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
                            <div onclick='toggleFavorite()'>
                                <i class='far fa-star' id='star{$row['id']}'></i>
                            </div>
                        </div>
                    </div>           
                </div>
            </div>
            ";
        }
    }
    mysqli_close($conn);
    ?>