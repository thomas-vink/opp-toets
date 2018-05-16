<?php
include('logger.php');

$emsg= "error message";
$imsg="info message";

$error = new log('error',date('y-m-d h:m:s'),$emsg);
$info = new log('all',date('y-m-d h:m:s'),$imsg);

print_r($error);
echo '<br>';
print_r($info);
