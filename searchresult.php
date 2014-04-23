<html>
    <head>
        <meta charset="UTF-8">
        <title>Main Page</title>
        <link rel="stylesheet" href="stylesheet.css"/> 
    </head>
    <body>
        <h1 align="center "><b><i>Biblography Manager </h1></b></i>  
        <!-- Links Right begin-->
   <div style = "clear: right; float: right; text-align: right;">
  
       <a href = "myaccount.php" ><b>My Account</b></a>
       <a href = "logoutpage.php" >Click here to logout</a>
   </div>
<!-- Links right end-->
           
<div id= "divi1">

    <form name="change active library" action="mainpagetable.php" method="post">
           <h><b>Change Active Library</b></h></br></br>
         
               
               
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
           
           <input type="submit" value="Click to Change Active Library" onclick=""></br>
       </form>
    <form name="rename library" action="renamelibrary.php" method="post">
             <input type="submit" value="Click to rename Active Library" onclick=""></br>
       </form>
            <form name="delete library" action="deletelibrary.php" method="post">
             <input type="submit" value="Click to delete Active Library" onclick=""></br>
       </form>
</div>




    <div id= "divi2" >
        <form name="create new library " action="indexfunc.php" method="post">
              
               <h><b>Create new library</h></b></br></br>
        
            <input type="text" name="Library_Name" />
            </br></br>
                        <input type="submit" value="Add New Library" ></br></br>
              
        </form>
    </div>
        <div id= "divi3" >
            <h><b>Select library to share</h></b></br></br>
        <form name="Share with" action="sharelibrary.php" method ="post">
            
        
    
                             
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
</select><br>
           
              <h><b>Share With</h></b></br></br>
              <input type="text" name="share_with" placeholder="email address"/></br></br>
              <input type="submit" value="Click to share Library " onclick=""></br>
              </form>
          </div>
        
          
              
        </form>
          </div>
           <div id= "divi5" >
               <form name="Search Libraries" action="searchresult.php" method="post">
            
           
                   <b><i><u><h>Search Libraries</h></u></i></b></br></br>
            <h>Author Name<h></br>
                    <input type="text"  name="sauthorname" /> </br> 
                    <h>Title<h></br>
                            <input type="text"  name="stitle" /></br>  
                            <h>Year<h></br>
                                    <input type="text"  name="syear" /></br>  
                                    
                                    <h>Libraries to Search</h>   </br>                        
        <select multiple="multiple" name="Libraries Name[]">
            
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
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

        </select></br></br>
        <input type="submit" value="Search and save results" onclick="">
        
     

           </div>
        
        <container name="first table">
<div id= "divi6" style="color:#0000FF">
          
          

  
              <table border="2"><tr>
                 <b><td width="100">ID</td></b>
                 <b><td width="150">TITLE</td></b>
                 <b><td width="250">AUTHOR</td></b>
                 <b><td width="85">YEAR</td></b>
                 <b><td width="85">CHAPTER</td></b>
                 <b><td width="75">EDITION</td></b>
                 <b><td width="100">PAGES<td></b>  
                 <b><td width="75">NOTE</td></b>
                 <b><td width="100">PUBLISHER<td></b>  
</tr>
<?php


   // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("biblography") or die(mysql_error()); 
 
 $sauthor = filter_input(INPUT_POST, 'sauthorname');

$stitle = filter_input(INPUT_POST, 'stitle');
$syear = filter_input(INPUT_POST, 'syear');
 
 $data = mysql_query("SELECT * FROM reference where author= '$sauthor' OR title= '$stitle 'OR year= '$syear'"); 
 //or die(mysql_error()); 
 
 

 while($info = mysql_fetch_array( $data )) 
 { 
echo "<tr>";
   echo "<td>" . $info['id'] . "</td>";
   echo "<td>" . $info['title'] . "</td>";
   echo "<td>" . $info['author'] . "</td>";
   echo "<td>" . $info['year'] . "</td>";
   echo "<td>" . $info['chapter'] . "</td>";
   echo "<td>" . $info['edition'] . "</td>";
   echo "<td>" . $info['pages'] . "</td>";
   echo "<td>" . $info['note'] . "</td>";
   echo "<td>" . $info['publisher'] . "</td>";


echo "</tr>";
 
   
 }
        ?>
 </table>
                
                
                </form>
            </div>
            
            
                
     
                    
                 
                    
                               
                 <div id="divi7" style="border:3px solid black;overflow:scroll;overflow-y:scroll;overflow-x:scroll;">
<p style="height:1%;">

    
   



                 
                
<form name ="add_library" action="tableentry.php" method="post">               
                
                
           <h1>Choose library to save book<h1>              
                
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
            
        
            

 
 <table border="3px" bgcolor="">
  <tr>
      <th>Title:</th>
      

 <th><input type="text"  size="100" maxlength="100" name="title" /></th>
  </tr>
  <tr>
      <th>Author:</th>
      <th><input type="text" size="100" maxlength="100" name="author" /></th>
			</tr>
                        
                         <tr>
      <th>Year:</th>
      <th><input type="text" size="100" maxlength="100" name="year" /></th>
			</tr>
  
                                       <tr>
      <th>Chapter:</th>
      <th><textarea name="chapter" rows="15" cols="65" /></textarea></th>
			</tr>      
                        
                    <tr>
      <th>Edition:</th>
      <th><input type="text" size="100" maxlength="100" name="edition" />
    
      </th>
      
			</tr>    
                        <tr>
 <th>Pages:</th>
      <th><textarea name="pages" rows="15" cols="65" /></textarea></th>
			</tr>  

                        <tr>
 <th>Note:</th>
 <th> <input type="text" size="100" maxlength="100" name="note" /></th>
			</tr>  
                        <tr>
 <th>Publisher:</th>
 <th> <input type="text" size="100" maxlength="100" name="publisher" /></th>
			</tr>  
                        <tr>
 

 </table>
    
    <input type=submit value="NEW"  >
                 </div>
            
 
 
 </table>
 

 
        </form>
                    
                    
                 </div>
        
    </body>
</html>