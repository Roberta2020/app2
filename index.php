<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// isspausdina POST info
print("<pre>");
var_dump($_POST["lname"]);
print("</pre>")
?>

<!-- formos pavizdys su POST metodu--> 
<form action="./" method="POST">  
<label for="lname">Last name:</label><br>
<input type="text" id="fname" name="lname" value="Doe"><br>
<input type="submit" value="Submit">
</form>

<!-- islaikomi duomenys tarp requestu formoje-->     
<?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(!isset($_POST['fname']) || empty($_POST['fname']))
            print('<h3 style="color: red">Please enter your first name!</h3>');
          if(!isset($_POST['lname']) || empty($_POST['lname']))
            print('<h3 style="color: red">Please enter your last name!</h3>');
        }
      ?>
          <label for="fname">Enter your firstname:</label><br>
      <form action="" method="POST">
          <input type="text" 
                id="<?php echo 'fname'; ?>" 
                name="fname" 
                value="<?php if(isset($_POST['fname'])) print($_POST['fname']) ?>">
                <br>
          <label for="lname">Enter your lastname:</label><br>
          <input type="text" id="lname" name="lname" 
                value="<?php if(isset($_POST['fname'])) print($_POST['lname']) ?>">
        <br>
          <input type="submit" value="Submit">
      </form>


<!-- tikrinama ar kintamasis atsiustas is browserio-->

<?php
if(isset($_POST['fname'])){
            print("<pre>Hello " . $_POST['fname'] . "!</pre>");
        }
?>
    <?php

// do while panaudojimas
    do {
    $userInput = readline("Įveskite slaptažodį: ");
} 
while($userInput != $pass); 

// switch panaudojimas

$d = date("D");
print($d . "<br>");
switch ($d){
case "Mon":
echo "Today is Monday";
break;
case "Tue":
echo "Today is Tuesday";
break;      
case "Wed":
echo "Today is Wednesday";
break;
default:
echo "Wonder which day is this ?";
}

print('<br>');

// multicase pavizdys
switch ($d){
    case "Mon":
    case "Sun":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;      
    case "Wed":
        echo "Today is Wednesday";
        break;
    default:
        echo "Wonder which day is this ?";
}


?>
</body>
</html>




