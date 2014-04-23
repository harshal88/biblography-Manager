
<?php



$lib_name = filter_input(INPUT_POST, 'Library_Name');

session_start();
$con = mysqli_connect("localhost", "root", "", "biblography");

$result=mysqli_query($con,"SELECT email FROM authentication where username='".$_SESSION['login_username']."' ");
    
    
    

$temp=mysqli_fetch_array($result);

 
  
  
 $result2=mysqli_query($con,"INSERT INTO library (id, display_name, owner_email) VALUES ('DEFAULT','$lib_name','$temp[0]')"); 
  
  
   header("Location:index.php");
  
  





?>


