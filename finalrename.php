
 <?php
                   
   session_start();
                            
                          // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("biblography") or die(mysql_error()); 

 
 $lname = filter_input(INPUT_POST, 'lname');
                    
                    
                    //echo $lname;
                    
                    
                    
                    $selectedoption = $_POST['SearchLibrary'];
                    
                    
                    
                    //echo $selectedoption;
                    //echo $selectedoption;
                    //die();
$a = "Trash";
$b="Unfiled";
                    if (strcasecmp($selectedoption, "Trash") == 0 || strcasecmp($selectedoption, "Unfiled") == 0 || strcasecmp($selectedoption, "All") == 0)
                  
  
                     {  echo "Can Not rename Trash and Unfiled";
                    }
                    else
                                         {    
  $sql1 = "UPDATE reference SET lib_name = '$lname'
          WHERE lib_name = '$selectedoption'";
    mysql_query($sql1) or die(mysql_error());
  
  $sql2 = "UPDATE library SET display_name = '$lname'
          WHERE display_name = '$selectedoption'";
  mysql_query($sql2) or die(mysql_error());
  echo "Succesfully updated!";



                   }
                        
                        
                        
                 ?>   
<form name="back" action ="index.php">
   <input type="submit" value="Back" onclick=""/>
           </form>
 

            