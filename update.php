<?php 

    include("database.php");
    $conn = Database::connect();

    $id = $_GET["id"];
    $sql = "SELECT * FROM students WHERE studentId = ".$id."";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $first_name = $row["first_name"];
            $middle_name = $row["middle_name"];
            $last_name = $row["last_name"];           
        }
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <form action="updateStudent.php" method="post">
            <label>First name
                <input type="text" name="fname" value=<?php echo $first_name?> />
            </label>
            <br/>
            <label>
                Middle name
                <input type="text" name="mname" value=<?php echo $middle_name?> />
            </label>
            <br/>
            <label>
                Last name
                <input type="text" name="lname" value=<?php echo $last_name?> />
            </label>
            <br/>
            <input type="hidden" name="id" value=<?php echo $id ?> />
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>