<?php
//get data from form  
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email= $_POST['email'];
$date = $_POST['date'];
$people_num= $_POST['number_of_people'];
$reserved_location = $_POST['radAnswer'];

$to = "talalquleh@gmail.com";
$subject = "Mail From Fine Food";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n numberOfPeople =" . $people_num ."\r\n location reserved in =" .$reserved_location;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Thanks.html");
}
?>