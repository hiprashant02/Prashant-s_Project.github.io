<?php 
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$subject="A new querry submitted".$name;
$to="hiprashant02@gmail.com";
$header="From: ".$email;
mail($email,$subject,$msg,$header);
header(Location :index.html?mailsent)
}
    else{
echo "Could not be submitted. Please check if all the details are filled corretly"
    }


?>