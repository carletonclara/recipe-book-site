<?php
    include_once 'connect.php';
    $search = !empty($_POST['search']) ? $_POST['search'] : (!empty($_GET['search']) ? $_GET['search'] : null);

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "SELECT * FROM recipe WHERE recipe_name LIKE '%{$search}%' OR author LIKE '%{$search}%';";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    return $resultCheck;
    mysqli_close($conn);
    ?>