
<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "biblography");

 //Check connection
if (mysqli_connect_errno()) {
    echo "<script>alert('Failed to connect to MySQL: ');</script>" . mysqli_connect_error();
}
$Uname = filter_input(INPUT_POST, 'uname');
//$Uname = $_POST['uname'];
//$Pass = $_POST['pwd'];
$Pass = filter_input(INPUT_POST, 'pwd');



echo "{$Uname}: {$Pass}";

try {
    $dbh = new PDO("mysql:dbname=biblography;host=localhost;", "root", "");
    $statement = $dbh->prepare("SELECT username, password FROM authentication where username=? and password=?");
    $statement->execute(array($Uname, $Pass));
    $result = $statement->fetchAll();
    print_r($result);

    if ($result) {
        echo "<script>alert('You Have Logged In Successfully');</script>";
        $_SESSION['login_username'] = "$Uname";
        echo 'you are ' . $_SESSION['login_username'];
        
        header("Location:index.php");
    } 
    else {
         echo '<script type="text/javascript">alert("Inncorect username or password")</script>';
         header("Location:loginpage.php");
    }
    die();
} 
catch (PDOException $error) 
{
    print_r($error);
    die();
}

?>



