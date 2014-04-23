
 <?php
                   
   session_start();
                            
                          // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("biblography") or die(mysql_error()); 

 
 //$lname = filter_input(INPUT_POST, 'lname');
                    
                    
                    //echo $lname;
                    
                    
                    
                    $selectedoption = $_POST['SearchLibrary'];
                     $share_with = filter_input(INPUT_POST, 'share_with');
                    //echo $selectedoption;
                    //echo $share_with;
                    //die();
                    
                      $sql1= "INSERT INTO library (id,display_name,owner_email) VALUES ('','$selectedoption','$share_with')";
 mysql_query($sql1) or die(mysql_error());
       
                    ?>
<form name="back" action ="index.php">
    <h1>Library has been shared click back to continue</h1>
   <input type="submit" value="Back" onclick=""/>
           </form>
                   

            