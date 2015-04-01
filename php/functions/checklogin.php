<?php
session_start();
include('Database.php');

$email = $_POST['email'];
$pass = md5($_POST['password']);

$query = "SELECT * FROM user WHERE email='$email' AND password='$pass'";

if(mysql_query($query))
{
    while(($row = mysql_fetch_assoc($query)) != NULL) {
        if($row['type'] == '1'){

            $query2 = "SELECT * FROM users WHERE id=".$row['id']."";
            //$_SESSION['loggedin'] = mysql_query($query2);
                while($data = mysql_fetch_assoc($query2)){
                    $row[] = $data;
                }
                print_r($row);

        }

        if($row['type'] == '2'){
            $query2 = "SELECT * FROM artists WHERE id=".$row['id']."";
            $_SESSION['loggedin'] = mysql_query($query2);

        }

        if($row['type'] == '3'){
            $query2 = "SELECT * FROM sponsors WHERE id=".$row['id']."";
            $_SESSION['loggedin'] = mysql_query($query2);

        }



    }

    header('Location:index.php');
    $_SESSION['myusername'] = $email;
}
else
{
    return "Verkeerde e-mail of passwoord";
    echo mysql_error();
}
?>