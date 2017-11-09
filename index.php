<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lommeregner</title>
</head>
<body style="background-color: lightgrey">
<div>
<form method="post" action="controller/Lommeregner.php">
    <h1 style="color:cornflowerblue">Lommeregner</h1>
    Tal 1 <input type="text" name="number1" value="<?php if(isset($num1)) {echo $num1;}?>"><br /><br />
    Tal 2 <input type="text" name="number2" value="<?php if(isset($num2)) {echo $num2;}?>"><br /><br />

    vælg operation<br/><br/>
    <input type="radio" name="n" value="+"> Plus<br/>
    <input type="radio" name="n" value="-"> Minus<br/>
    <input type="radio" name="n" value="*"> Gange<br/>
    <input type="radio" name="n" value="/"> Divider<br/>
    <input type="submit" name="submit" value="Udregn"><br/><br/>

</form>
</div>
</body>
</html>