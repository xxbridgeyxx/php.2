<?php
/**
 * Author: Bridget Vlasich
 * Date:  26 May 2020
 * Version: 1.0
 * Purpose: for login
 */
if (isset($_POST["username"])) {


    $username = $_POST["username"];
    $password = $_POST["pwd"];

    $server = "dno6xji1n8fm828n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "m93jl91jyplqicdr";
    $pwd = "bj3txjw0ns0614qs";
    $database = "iebdey321jcd2mhv";

    $connection = new mysqli($server, $user, $pwd, $database);//create database connection 
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        echo "Connection Created";
    }
    //is the username in my table?
    $sql = "select * username from Users where username '$username'"; // this is our query
    $result = $connection->query($sql); //run query on this connection
    if ($result->num_rows == 1) { //this condition means user exists in our database
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) { //check password
                echo "access granted";

            } else {
                echo "wrong password";
            }
        }
    } else {
        echo "wrong username";
    }

}else{
    ?>
<script>
    window.open("loginform");
</script>
<?php
}
