<?php
   echo "Full name: " . $_POST["fullname"];
   echo "Phone number: " . $_POST["phonenumber"];
   echo "E-mail:: " . $_POST["email"];

   $mitta = "A";

   if ($_POST["fullname"] == $mitta || "a") {
      echo "Stämmer";
   } else {
      echo "Stämmer inte";
   }

?>