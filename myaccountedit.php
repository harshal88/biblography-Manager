
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
 $_SESSION['login_username'] ;

//echo $cname;



try {
    $dbh = new PDO("mysql:dbname=biblography;host=localhost;", "root", "");
   
    $statement = $dbh->prepare("UPDATE  authentication SET username= '$Uname', password= '$Pass', email= '$Email' where  username= '" .$_SESSION['login_username']." '");
    $statement->execute();
    echo "<script>alert('You have updated successfully');</script>";
        header("Location:index.php");
    

    die();
} 
catch (PDOException $error) 
{
    print_r($error);
    die();
}

?>

