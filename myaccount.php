<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Account</title>
        <link rel="stylesheet" href="stylesheet.css"/> 
    </head>
    <body>
          <script type="text/javascript"> 
		
				function Validate()
				{
					var error_msg = "";
					var f = document.forms["myForm"];
                                        var emailregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if(f.uname.value.length===0) {error_msg += "No  User name was entered\n";}
					if(f.pwd.value.length===0) {error_msg += "No Password was entered\n";}
                                        if(f.pwdc.value.length===0) {error_msg += "Enter your Password again\n";}
                                        
					if(f.email.value.length===0) {error_msg += "No Email Address was entered\n";}
					
                                        if(f.pwd.value !== f.pwdc.value) {error_msg += "Password does not match\n";}
                                        
                                        if(emailregex.test(f.param4.value) === false){error_msg += "Incorrect email was entered";}
					if(error_msg.length !== 0)
					{
							alert(error_msg);
							return false;
					} else {
						    return true;
					}
					
				}
				
		</script>
                <div id="div2" align="center" >
        <h1 align="center">Edit Registration Details here</h1>
        <form name="myForm" action="myaccountedit.php" method="post">
            <b>Enter User Name</b>
            <input type= "text" name="uname" value="" /></br>
        <b> Enter Password </b>
        
        <input type="PASSWORD" name="pwd" value="" /></br>
       <b> Confirm Password </b>
        
        <input type="PASSWORD" name="pwdc" value="" /></br>
       
        <b>Enter Email Address</b>
            <input type= "text" name="email" value="" />
            <input type="submit" value= "Save"  onclick="return Validate();"/>
            <input type="submit" value= "Return"/>
            </form>
                </div>
    </body>
</html>