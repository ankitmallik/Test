<?php
include('oop.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$gaari = new car('bmw','black');
echo $cars->name;
echo $gaari->name;

?>

</body>
</html>