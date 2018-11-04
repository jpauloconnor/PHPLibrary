<!--Run using xampp. 
Resutls found at localhost:
http://localhost:8080/php-101-fundamentals/00-Fundamentals/01-basic-syntax.php
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //Just playing with fundamentals for syntactical awareness.
        $foo = "Foo";

        $isFoo;
        $bar = "";

        if($foo == "Foo"){
           $isFoo = true;
        }

        if($isFoo){
            $bar = "bar";
        }

        $foobar = $foo . $bar;
        echo "<h1>$foobar</h1>"; //<-- Foobar in h1
    ?>
</body>
</html>