<?php
   //Reseteamos variables a 0.
   $name = $lastname = $company = $email= $to = $headers = $mailMessage = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $name = $_POST['name'];
      $lastname = $_POST['lastname'];
      $company = $_POST['company'];   
      $email = $_POST['email'];
      $to = 'olga.kristel.l@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $mailMessage = "Name: " . $name;
      $mailMessage .= "\r\n";
      $mailMessage .= "LastName: " . $lastname;
      $mailMessage .= "\r\n";
      $mailMessage .= "Company: " . $company;
      $mailMessage .= "\r\n";
      $mailMessage .= "Email: " . $email;
      $mailMessage .= "\r\n";

    if (mail($to, $subject, $mailMessage, $headers)) {
         echo "<script language='javascript'>
            alert('Your message has been sent successfully.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('Error');
         </script>";
    }
  }
?>