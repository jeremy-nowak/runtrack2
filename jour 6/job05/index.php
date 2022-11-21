<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 5</title>

    <?php


switch($_GET["style"])
{
case 'style1':
    echo'<link rel="stylesheet" href="style1.css">';
break;

case 'style2':
echo'<link rel="stylesheet" href="style2.css">';
break;

case 'style3':
echo'<link rel="stylesheet" href="style3.css">';
break;


}

?>
</head>
<body>
    
<form action=""method="get">>
<label for="Style-select">Choose a Style:<br><br></label>

<select name="style" id="styleid">
    <option value="">--Style:--</option>
    <option value="style1">Style1</option>
    <option value="style2">Style2</option>
    <option value="style3">Style3</option>
    <input type="submit" value="Envoyer">  


</select>
</form>






    
</body>
</html>