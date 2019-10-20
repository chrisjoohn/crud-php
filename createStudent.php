<?php

include("database.php");

$conn = Database::connect();

if(isset($_POST["submit"])){
    $first_name = $_POST["fname"];
    $middle_name = $_POST["mname"];
    $last_name = $_POST["lname"];

    $sql = "INSERT INTO students(first_name, middle_name, last_name) 
            VALUES('".$first_name."', '".$middle_name."', '".$last_name."')";

    $result = $conn->query($sql);
    
    if($result){
        echo '
            <script>
                window.location.href="/trial";
            </script>
        ';
    }else{
        echo $conn->error;
    }
}



?>