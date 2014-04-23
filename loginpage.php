<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
         <link rel="stylesheet" href="stylesheet.css"/> 
       
    </head>
    <body>
        <script type="text/javascript"> 
		
				function Validate()
				{
					var error_msg = "";
					var f = document.forms["sign_in"];
					if(f.uname.value.length===0) {error_msg += "No  User name was entered\n";}
					if(f.pwd.value.length===0) {error_msg += "No Password was entered\n";}
					
						
					if(error_msg.length !==0)
					{
							alert(error_msg);
							return false;
					} else {
						    return true;
					}
					
				}
				
		</script>
                  

                        
        <div id="div1">

            <h1 align="center">Biblography manager</h1>
            <form name="sign_in" action="loginvalidate.php" method="POST">  
       
            <b>Enter User Name</b>
            <input type= "text" name="uname" value="" />
            
        <b> Enter Password </b>
        <input type="PASSWORD" name="pwd" value="" />
               
        <input type="submit" value="Login" onclick="return Validate();"/>
        <a href="registerpage.php" >Register Yourself Please</a>
            </form>

</div>
     
    </body>
</html>
        
 