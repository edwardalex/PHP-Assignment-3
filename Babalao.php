<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop</title>
</head>
<body>
    <?php
      for($i=155;$i<=255;$i++)
      { 
        if($i%7 == 0){
            echo "Baba" . "<br>";

        }
        else if($i%9 == 0){
            echo "Lao" . "<br>";
        }

        else {
            echo $i. "<br>";

        }


       }
   
    
    ?>
</body>
</html>