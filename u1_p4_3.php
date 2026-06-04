<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $CMonth="oct";
            if($CMonth=="dec"){
                echo"the current month is not jan";
                    }
            elseif($CMonth=="oct"){
                echo"the current month is  oct";
            }
            else{
                echo"the current month is:"."$CMonth"."<br>";
            }

    ?>
</body>
</html>