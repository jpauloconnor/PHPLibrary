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
    class Foo
    {
        public $bazzbuzz = '<h1>bazzbuzz</h1>';

        public function displayBazzBuzz(){
            echo $this -> bazzbuzz;
        }
    }

    $foo = new Foo();
    $foo -> displayBazzBuzz();

    ?>    
</body>
</html>
