<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
            font-size: 24px;
            color: red;
        }
    </style>
</head>
<body>

<h1> Welcome to My Website</h1>
<h2>Hello world</h2>
    
<?php

for ($i=1; $i < 5; $i++)
{
        echo "$i <br>";
}

$products = ['Car', 'Bags', 'sheos'];

foreach($products as $product){
    echo " The product is $product ";
}



echo "This is a php line";
?>

</body>
</html>
