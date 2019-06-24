<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include 'king/data/data_heroList.php' ;
     foreach($heroList as $k) {
         echo $k['icon'];
     } ?>
</body>
</html>