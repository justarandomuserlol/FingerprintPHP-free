<?php
require "script.php";
if(isset($_COOKIE['visitorId']))
{
    $visitorId = $_COOKIE['visitorId'];
}
else
{
    // cookies are disabled, show an error message to the user, or follow other alternative.
}