<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     $person=array(
        "nom"=>"Ali","age"=>25,"sexe"=>"M","notes"=>array(12,15,18),
     );
        echo "<h3>le nom est : ".$person["nom"]."</h3>";
        echo "<h3>l'age est : ".$person["age"]."</h3>";
        echo "<h3>le sexe est : ".$person["sexe"]."</h3>";
        echo "<h3>les notes sont : </h3>";
        foreach($person["notes"] as $note){
            echo $note." ";
         }
   ?>
</body>
</html>