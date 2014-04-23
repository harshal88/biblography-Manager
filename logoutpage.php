<html>
    <head>
        <meta charset="UTF-8">
        <title>logout</title>
                <link rel="stylesheet" href="stylesheet.css"/> 
    </head>
    <body>
        <form name="myForm" action="loginpage.php" method="post">
        <div id="div3" align="center">
                   <h1 align="center">You have logout successfully</h1>

        
            </form>
        </div>
            <?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session


  
header("location:loginpage.php"); //to redirect back to "index.php" after logging out
exit();
?>
    </body>
</html>