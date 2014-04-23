
 <?php
                   
   session_start();
                            
                          // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("biblography") or die(mysql_error()); 

 
 //$lname = filter_input(INPUT_POST, 'lname');
                    
                    
                    //echo $lname;
                    
                    
                    
                    $selectedoption = $_POST['SearchLibrary'];
                    //echo $selectedoption;
                    //die();

                 if (strcasecmp($selectedoption, "Trash") == 0 || strcasecmp($selectedoption, "Unfiled") == 0 || strcasecmp($selectedoption, "All") == 0)
                  
  
                     {  echo "Can Not delete Trash and Unfiled";
                    }
                    else
                        
                    {
                            
       $sql1= " DELETE FROM reference where lib_name= '$selectedoption'";
                          $sql1= " DELETE FROM library where display_name= '$selectedoption'";

                    }
  echo "Succesfully updated!";



                    
                    ?>
<form name="back" action ="index.php">
   <input type="submit" value="Back" onclick=""/>
           </form>
                   

            