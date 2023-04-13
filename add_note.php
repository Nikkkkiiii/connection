<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "sorted";

$database_connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);

if(!$database_connection){
    echo "Error";
    echo http_response_code(404);
}
else{

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //caps??
            $Id = $_POST['Id'];
            $Title = $_POST['Title'];
            $Description = $_POST['Description'];
            $Category = $_POST['Category'];
            $User = $_POST['User'];


                // echo"$name";
                // echo"$email";
                // echo"$password";
                // Id	Title	Description	Category	EndDate	

                $insertQuery = "INSERT INTO task VALUES('', '$Title','$Description','$Category','', $Id)";

                $execute_query = mysqli_query($database_connection, $insertQuery);
                http_response_code(200);

            }

        else{
            echo"Method not valid";
        }




}
