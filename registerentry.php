
<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "biblography");

//// Check connection
if (mysqli_connect_errno()) {
    echo "<script>alert('Failed to connect to MySQL: ');</script>" . mysqli_connect_error();
}
$Uname = filter_input(INPUT_POST, 'uname');

$Pass = filter_input(INPUT_POST, 'pwd');
$Email = filter_input(INPUT_POST, 'email');





try {
    $dbh = new PDO("mysql:dbname=biblography;host=localhost;", "root", "");
    $euser= $dbh->prepare("SELECT * FROM authentication WHERE username='$Uname'");
    $euser->execute();
    $euser1 = $euser->fetchAll();
    
       if ($euser1)
       {
             echo "<script>alert('User allready exists');</script>";
       }
    else{
    $statement = $dbh->prepare("INSERT INTO authentication (username, password, email) VALUES ('$Uname','$Pass','$Email')");
    $statement->execute();
    
     $statement2 = $dbh->prepare("INSERT INTO library (id, display_name, owner_email) VALUES (DEFAULT,'Trash','$Email')");
         $statement2->execute();
      $statement3 = $dbh->prepare("INSERT INTO library (id, display_name, owner_email) VALUES (DEFAULT,'Unfiled','$Email')");
    $statement3->execute();
    
    echo "<script>alert('You have registered successfully');</script>";
        header("Location:registersuccessful.php");
    }

    die();
} 
catch (PDOException $error) 
{
    print_r($error);
    die();
}

?>



