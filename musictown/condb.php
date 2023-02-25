<?php
$condb = mysqli_connect("localhost","root","",
    "musictown") or die("Error : ".
    mysqli_error($condb));

date_default_timezone_set('Asia/Bangkok');

?>