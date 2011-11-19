<?php
//BEGIN PROOF-OF-CONCEPT
//---------------
// Author: Marcin Ławniczak
// Mail: marcin.safmb@gmail.com
// I have yet to choose name for this project
// Now this is onlu proof of concept
// Will use README driven development
//---------------

// Here the readme starts
// Imagine you have information (A piece of text, an image, an article that you would like to read)
// But you just don't have time to think about it. Or you will need to tell someone that information
// later. And you forget about it! Thats when that little service comes in. Put a contact (e-mail, facebook account,
// IM number), the info, and the date. That's it. Our super-hiper-extra system will tell the person the info at the
// specified date.

// Ideas
// Soma kind of social coonnect
// jQuery UI datepicker + a dropdown list with dates further in time
// Whole system in one file.

If($_POST['issent'] == 'yes'){
// Functions
/*function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if
(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}
*/
// Static Data

// Configuration
$db_hostname = '';
$db_username = '';
$db_password = '';
$db_name = '';
// Data parsing
$validated_mail = $_POST['email'];
echo "$_POST[data]";
echo "$_POST[datepicker]";
echo "$_POST[issent]";
echo "$validated_mail";
// DB Connection
/*try {
    $pdo = new PDO("mysql:host=$db_hostname;dbname=$db_name;charset=utf8", $db_username, $db_password, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
catch (PDOException $e) {
    echo 'We encountered problem while connecting to our database. We apologize for any inconvinience this error may have caused' . $e->getMessage();
	exit;
}*/
//

}

else{
$form = <<<FORM
<html>
    <head>
        <title> Tell us now, we'll remind you later.</title>
        <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script> 
	    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>         
        <script> 
	        $(function() {
	    	    $( "#datepicker" ).datepicker();
	        });
	    </script> 
    </head>
    <body>
        <div class="container">
            <p>
                Write down (or upload) anything you want, and we will send it to specified contact in future.<br> Tomorrow, in a month, 10 years.
            </p>
            <form method="POST" action="Rminder_POC.php" class="form-stacked">
                <p>Email of person to send it to:</p><input type="text" name="email">
                <p>Place to enter the data:</p>
                <textarea name="data" cols="400" rows="10" id="data">Enter the info that you want to have reminded here...</textarea>
                <br>
                <p>Date:</p><input type="text" name="datepicker" id="datepicker">
                <br><br>
                <input type="hidden" name="issent" value="yes">
                <input type="submit" class="btn" id="submit" value="send">
            </form>
        </div>
    </body>
</html>
FORM;
echo $form;
}

// END PROOF-OF-CONCEPT
?>
