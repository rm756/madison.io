
<?php

if (isset($_POST['submit'])) {

    $name= $_POST['name'];
    $mailFrom= $_POST['mail'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    $mailTo = "sales@madisonseafood.net";
    $headers = "From: " .mailFrom;
    $txt = "email from: " .name "\n\n".$message;



    mail($mailto, $subject, $txt, $headers);
    header("Location: form.php?mailsend");

}

?>
