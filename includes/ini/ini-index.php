<?php
$password = '';
$email = '';

if(isset($_POST['submitLogin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $db->loginUser($email, $password);
    //var_dump($user);

    if(!$user){

        $session->message("error", "<span class='red'>Je hebt onjuiste gegevens ingevuld, probeer het nog eens</span>");
        header("Location: index.php");
    }else{

        $session->message("error", "<span class='red'>SUCCES</span>");
        //$session->set("id", $user['id']);
        header("Location: index.php");

    }


}

if(isset($_POST['registerUser'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $registered = $db->registerUser($email, $password);
    $session->message("error", "<span class='red'>Je bent geregistreerd, log nu in met je gegevens.</span>");
    header("Location: index.php");


}
?>