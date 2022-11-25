<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
</head>
<body>

<form action=""method="get">
<label for="Style-select">Choose a Style:<br><br></label>

<select name="fonction" id="styleid">
    <option value="">--Fonction:--</option>
    <option value="gras">gras</option>
    <option value="cesar">cesar</option>
    <option value="plateforme">plateforme</option>
    <input type="submit" value="Envoyer">  
</select>
    <br><br><input type="text" value="str">
</form>
    
    
    
    <?php
function gras($str){
    for ($i=0; $i < isset($str[$i])  ; $i++) { 
        if (ctype_upper($str)){
            echo "<b> $str <b>";
        }
    }

}

    ?>
    
</body>
</html>