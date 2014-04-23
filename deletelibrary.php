<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>successful register</title>
                <link rel="stylesheet" href="stylesheet.css"/> 
    </head>
    <body>
        <form name="myForm" action="finaldelete.php" method="post">
        <div id="div3" align="center">
            
            <h1 align="center">Select the library</h1>
                 
            <select name="SearchLibrary">
                            <option selected="yes">All</option>
                            <?php
                            
                            
                            
                               session_start();
                            
                               $con = mysqli_connect("localhost", "root", "", "biblography");
                            
                            
                         
                             $_SESSION['login_username'] ;

                            
                            $email_result=mysqli_query($con,"SELECT email FROM authentication where username= '".$_SESSION['login_username']."' ");
    
    
  //  echo $email_result;
    
  //  die();

$temp=mysqli_fetch_array($email_result);

 
  
                            
                            
                            
                            
                            
                            
                            
                            
                         
                            $query1 = "SELECT display_name FROM library where owner_email = '$temp[0]'";
                            $result = mysqli_query($con, $query1);
                            while ($row = mysqli_fetch_array($result)) {
                                $row = $row['display_name'];
                                echo'<OPTION VALUE=' . "$row" . '>' . $row . '</OPTION>';
                            }
                            
         
?>
                              
                        </select>
        
                     <input type="submit" value= "Click here to delete and continue" id= "update" />  
                 
                 
      
        
            </form>
        </div>
    </body>
</html>
