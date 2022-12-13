<?php
   echo "Full name: " . $_POST["fullname"];
   // echo("Phone number: " . $_POST['phonenumber'] . "<br />\\n");
   // echo("E-mail: " . $_POST['email'] . "<br />\\n");

   $mitta = "A";

   if ($_POST["fullname"] == $mitta || "a") {
      echo "Stämmer";
   } else {
      echo "Stämmer inte";
   }

?>