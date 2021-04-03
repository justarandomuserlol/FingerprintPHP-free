<?php
// use the "config.php" file that will define the visitorId variable
require "config.php";
// Text to reassure the user
echo "
Hello,
The FBI has tracked you,
To delete his data, go to http://bit.ly/delefbidata and put this ID:
";
// show the device id
echo $visitorId;
?>