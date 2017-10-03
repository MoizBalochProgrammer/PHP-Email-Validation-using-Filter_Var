<?php

$email = "moizbaloch@example.com";

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
 
   echo "$email : This is Valid Email";

}

else {
   echo "$email : This is invalid Email";
}


?>