<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class2</title>
</head>
<body>
    <?php
    class Actor{
        public $actorname;
        public $moviename;
        public $earnings;
     }
     $actor1 = new Actor();
    $actor1->actorname = "Sharuk Khan";
    $actor1->moviename = "Dunki";
    $actor1->earnings = 5.14;
    
    echo "This year best actor is ". $actor1->actorname."</br>";
    echo "His best movie is ". $actor1->moviename."</br>";
    echo "total earnings is ". $actor1->earnings."cores";
    
    ?>
</body>
</html>