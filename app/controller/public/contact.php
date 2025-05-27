<?php

function send()
{   
    // save_messages($_POST);
    // save_sms($_POST);

    echo 'function send';
}

function contact()
{ 
     render('contact/contact.php');

    //include(SITE_ROOT . '/app/view/public/contact/contact.php');
}
