<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "osmanisic187@gmail.com";
    $headers = "Od: " .$mailFrom ;
    $txt = "Dobili ste e-mail od: " .$name.".\n\n" .$mailFrom. ".\n\n". $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html");
}
?>
