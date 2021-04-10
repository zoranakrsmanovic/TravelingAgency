<?php
 
 $ime=$_POST['fname'];
 $prezime=$_POST['lname'];
 $email=$_POST['email'];
 $putovanje=$_POST['trips'] ;
 $datum_putovanja=$_POST['date'];
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title> Potvrda rezervacije </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
            background-image: linear-gradient(180deg,#152024, #263b42  );
            min-height: 100vh;
        }
    div {
        width: 500px;
        min-height: 400px;
        background-image: transparent;
 background-blend-mode: multiply,multiply;
        text-align: center;
        margin: 30px auto;
        border-radius: 8px;
        font-family: Arial, Helvetica, sans-serif;
        text-transform: capitalize;
    }
    h1 {
        
        text-align: center;
        color: #e85127;
        font-family: Arial, Helvetica, sans-serif;
        text-transform: capitalize;
        
    }
    div p,b {
        text-align: left;
        
        font-size: 20px;
        color: white;
    }
    </style>

       
</head>
<body >



<?php

function finalBill(){
$putovanje=$_POST['trips'] ;
$insurace = 50;
$trips_array = array("Camping"=>95, "Hiking"=>90,   
                    "Sightseeing"=>96, "Paragliding"=>93,   
                    "Sky diving"=>98, "Scuba diving"=>96,
                    "Climbing"=>96,
                );
foreach ($trips_array as $trips => $price) {
       
    if($trips == $putovanje){
        $cena = $price;

return ( $cena + $insurace);
}
}
}

class User{
    
    
    public $ime;
    public $prezime;
    public $email;

    function __construct($ime,$prezime,$email){

        $this->ime=$ime;
        $this->prezime=$prezime;
        $this->email=$email;
        
        }


    public function setIme($ime){
        $this->ime = $ime;
    }
    
    
    public function setPrezime($prezime){
        $this->prezime = $prezime;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    

    public function getIme(){
        return $this->ime;
    }
    
   
    public function getPrezime(){
        return $this->prezime;
    }

    public function getEmail(){
        return $this->email;
    }


    
}


echo "<div>";
echo "<h1 >Potvrda o rezervaciji putovanja</h1>";
$user = new User($ime,$prezime,$email);
echo "<b> Name and surname : </b> " .  $user->ime  . " " .   $user->prezime. "<br/>";
echo "<b> E-mail: </b> " .  $user->email. "<br/>";
echo "<b > Activity: </b> " . $putovanje . "<br/>";
echo "<b > Trip date : </b> " . $datum_putovanja . "<br/>";
echo "<b> Reservation date: </b> " . date('H:i, jS F') . "<br/>";

echo "<b> To pay (insurace included) : </b> ";
echo  finalBill(); 
echo "EUR";
echo "<br>";
echo "Your reservation was sent.";
echo "</div>";

?>




</body>
</html>