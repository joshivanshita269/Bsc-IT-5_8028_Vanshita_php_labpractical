<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $CMonth="aug";
        $date=23;
        if($CMonth=="aug")
        {
            if($date=="2"){
                echo"the date not match";
                    }
            elseif($date=="23"){
                echo"the date not match";
            }
            else{
                echo"the current month is:"."$CMonth"."<br>";
            }
        }
        else
        {
            echo"the current month is not aug";
        }
    ?>
</body>
</html>