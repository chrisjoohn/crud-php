<?php
include("database.php");

$conn = Database::connect();

$id = $_GET["id"];

$sql = "DELETE FROM students WHERE studentId ='".$id."'";


if($conn->query($sql)){
    echo '
        <script>
            window.location.href="/trial";
        </script>
    ';
}else{
    echo "error";
}

Database::disconnect();
?>