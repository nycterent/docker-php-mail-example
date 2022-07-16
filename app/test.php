<?php
    $to      = 'nobody@group.lt';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@group.lt'       . "\r\n" .
                 'Reply-To: webmaster@group.lt' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>
