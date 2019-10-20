<?php

include("database.php");
$conn = Database::connect();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    </head>

    <body>
        <table>
            <tr>
                <th>
                    First name
                </th>
                <th>
                    Middle name
                </th>
                <th>
                    Last name
                </th>
                <th>
                    Action
                </th>
            <tr>
            
            <?php 
            
                $stmt = "SELECT * FROM students";
                $output = "";
                $result = $conn->query($stmt);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $output .= '
                            <tr>
                                <td>
                                    '.$row["first_name"].'
                                </td>
                                <td>
                                    '.$row["middle_name"].'
                                </td>
                                <td>
                                    '.$row["last_name"].'
                                </td>
                                <td>    
                                    <a href="update.php?id='.$row["studentId"].'">EDIT</a> | <button onclick="Confirm('.$row["studentId"].')">DELETE</button>
                                </td>
                            </tr>
                        ';

                    }

                    echo $output;
                }

                Database::disconnect();
            
            ?>

        </table>

        
	<a href="create.php">CREATE</a>

    <script>
        function Confirm(id){
            var x = confirm("Are you sure you want to delete this?");
            if(x){
                window.location.href = "delete.php?id="+id;
            }
        }
    </script>

    </body>

</html>