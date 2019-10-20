<?php 

    include("database.php");

    $conn = Database::connect();
    if(isset($_POST["submit"])){
        $first_name = $_POST["fname"];
        $middle_name = $_POST["mname"];
        $last_name = $_POST["lname"];
        $id = $_POST["id"];

        $sql = "UPDATE students SET 
            first_name = '".$first_name."', 
            middle_name = '".$middle_name."', 
            last_name = '".$last_name."' WHERE studentId = '".$id."' ";

        if($conn->query($sql)){
            echo '
                <script>
                    window.location.href="/trial";
                </script>
            ';
        }
    }

    Database::disconnect();
?>