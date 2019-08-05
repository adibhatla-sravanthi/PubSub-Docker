<?php
if(isset($_POST['submit1']))
{
	$name= $_POST['name'];
	$file = fopen("/var/www/html/my_script.py","w+")or die("file not open");
	
	$s = $name;
	fputs($file,$s) or die("Data not write");
	fclose($file);
}




?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>Phase1 Form </h3>

<div class="container">
 <form action="#" method="post">
   

    <label for="subject">Enter Your Program </label>
    <textarea id="subject" name="name" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name ="submit1" value="Save In File">
    
<input type="submit" name = "submit3" value="Display">
</form>
</div>

<div class="container">
<form>
<label for="subject">Output </label>
    <textarea id="subject" name="name1" style="height:400px" value=<?php if(isset($_POST['submit3'])) { echo file_get_contents("/var/www/html/OutputFile.txt",':'); }?> ></textarea>

 


 
   </form>  
  
</div>

</body>
</html>



