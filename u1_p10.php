<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $may_salary=array(35000,40000,45000);
        $june_salary=array(35000,50000,45000);

        $s=array_intersect($may_salary,$june_salary);
        foreach($s as $m)
        {
            echo $m."<br>";
        }
    ?>
        </body>
</html>