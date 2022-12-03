
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");

$result = $mysqli->query("SELECT * FROM salles ORDER BY capacite DESC; ");

$a= $result -> fetch_array(MYSQLI_ASSOC);

echo "<table border='5'><tr>";


foreach ($a as $key => $value)
{
   echo " <th> " . $key . " </th> ";
}
echo "</tr>";
while ($a != NULL)
{
   echo "<tr>";
   foreach ($a as $value)
   {
         echo "<td>" . $value . "</td>";
   }
   echo "</tr>";
   $a = $result -> fetch_array(MYSQLI_ASSOC);
}
echo "</table>";
?>
</body>
</html>