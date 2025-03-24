<?php
echo "<h1>incorrect login</h1>";

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    echo "signup or try again";
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM users_info
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {

        /*echo "enter line 20";
        echo "post pasword: |".$_POST["password"]."|";
        echo "database password: |".$user["password"]."|";*/
        
        if ($_POST["password"] === $user["password"]) {

        //if (password_verify($_POST["password"], $user["password"])) {

            //echo "pass password verify";
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: TaskMaster-MB.html");
            exit;
        }
    }
    
    $is_invalid = true;
   
}

?>