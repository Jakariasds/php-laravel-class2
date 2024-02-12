<?php
 $FirstName= "Prianka ";
  $lastname= "Das Dewan";
  $age = 28;
  //var_dump( $FirstName );
  //var_dump($age);
  
  //echo $firstname;
  //echo $lastname."  ".$FirstName." ". $age;
//   echo "My name is:".$FirstName."".$lastname;
//   echo ", My age is:".$age;

  $pi =3.1416;
  //print $pi;
  //var_dump($pi);
  $isteenger = True;
  //var_dump($isteenger); 

  $cars = array("volvo","ford","toyeta");
  
 // echo $cars[0];

 class Actor{
    public $actorname;
    public $moviename;
    public $earnings;
 }
 $actor1 = new Actor();
$actor1->actorname = "Sharuk Khan";
$actor1->moviename = "Dunki";
$actor1->earnings = "5.14";

echo "This year best actor is ". $actor1->actorname;
echo "His best movie is ". $actor1->moviename;
echo "total earnings is". $actor1->earnings."cores";