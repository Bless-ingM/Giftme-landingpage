
<?php
    $host = "localhost";
    $username = "id14359376_giftemails";
    $password = "uK*y~R8G7!R$}%ko";
    $dbname = "id14359376_giftmeemails";

    $email = $_POST['email'];


    $conn = mysqli_connect($host, $username, $password, $dbname);
    if(mysqli_connect_errno())
        echo "connection could not establish" .mysql_connect_erro();
    else
        echo "success!!";

    if(empty($email)){
            echo "email can not be blank";
            die();
     }

$sql = "INSERT INTO usersEmails ( Email) VALUES ( '$email')";

if ($conn->query($sql) == TRUE ) {
    
    echo "Thank you!! Your response has been recorded";
}else{
    echo "Error:". $sql ."<br>" .$conn->error;
}

$conn->close();
?>