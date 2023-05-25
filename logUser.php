<?php
session_start();
include_once("config.php");

if(isset($_POST['loginCheck']) && isset($_POST['logemail']) && isset($_POST['logpass'])){
        $logemail= $_POST['logemail'];
        $logpass = $_POST['logpass'];
        
        $q = "SELECT email, pass FROM user WHERE email='".$logemail."' AND pass='".$logpass."'";
        $result_que= $mysqli->query($q);
        $rows = mysqli_num_rows($result_que);
        if($rows === 1){
            $_SESSION['is_login'] = true;
            $_SESSION['logemail'] = $logemail;
            echo json_encode($rows);
        
        }
        else if($rows === 0){
            echo json_encode($rows);
        }   
}

?>