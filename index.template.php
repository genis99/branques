<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach($cotxes as $marca) {
        if($marca != $cotxes[sizeof($cotxes) -1]) echo "$marca, ";
        else echo "$marca.";
    }
    ?>
</body>
</html>