<?php
    $error_message = "Something went wrong!";
    trigger_error($error_message, E_USER_ERROR);
    
    if(isset($_POST['email']))
    {
        echo 'Working';
    }

?>