<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>schort url</title>
    <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
    
<?php



//connected wih mysqli 
include "conection.php";

  
 //define variables and check if URL is well-formed
 $url_shortErr = $url_short ="";
 $url_longErr = $url_long ="";

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     if (empty($_POST['url_long'])){
         $url_longErr = 'You must enter URL';
     }else{
         $url_long = $POST['url_long'];
     } if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
        $url_long = "Invalid URL format" ; }
 }
 
 



?>

<body>

    <div class="card">
 
        <p>EDIT LINK:</p>
        <form>
        <input type="text" id="" name="url_short"  value="">
        <br>
         <input type="submit" value="Submit" name="">

    
    </form>


</div>




    
</body>
</html>

</body>
</html>