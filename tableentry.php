        <?php


   // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("biblography") or die(mysql_error()); 
 
 
 $title1 = filter_input(INPUT_POST, 'title');

$author1 = filter_input(INPUT_POST, 'author');

$year1 = filter_input(INPUT_POST, 'year');

$chapter1 = filter_input(INPUT_POST, 'chapter');

$edition1 = filter_input(INPUT_POST, 'edition');

$pages1 = filter_input(INPUT_POST, 'pages');

$note1 = filter_input(INPUT_POST, 'note');

$publisher1 = filter_input(INPUT_POST, 'publisher');


$selectedoption = $_POST['SearchLibrary'];
 
        $SQL = "INSERT INTO reference (id,title,author,year,chapter,edition,pages,note,publisher,lib_name) VALUES ('','$title1','$author1','$year1','$chapter1','$edition1','$pages1','$note1','$publisher1','$selectedoption')";
       
        $result = mysql_query($SQL);
        
         header("Location:index.php");
    
 ?>
 